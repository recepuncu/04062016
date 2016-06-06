<?php

class AnasayfaController extends Controller {
	
	public function gerceklesenAkisAra(){
        $program_adi = Input::get('program_adi');
        $programlar = DB::table('akis')
                ->select('progID','progAdi','tur')
                ->where('progAdi', 'LIKE', '%'.$program_adi.'%')
                ->orderBy('progAdi')
                ->distinct()
                ->get();
        return array('duzenleme_yetkisi' => Auth::user()->can("gerceklesen-goruntule"), 'programlar' => $programlar);
    }   


    public function gerceklesenYayinTarihleri(){
        $progID = Input::get('progID');
        $tarihler = DB::table('akis')
                ->select('tarihi')
                ->where('progID','=', $progID)
                ->groupBy('tarihi')
                ->orderBy('tarihi')
                ->get();
        return array('duzenleme_yetkisi' => Auth::user()->can("gerceklesen-goruntule"), 'tarihler' => $tarihler);
    }

    public function gerceklesenYayinSaatleri(){
        $progID = Input::get('progID');
        $tarihi = Input::get('tarihi');
        $saatler = DB::table('akis')
                ->select('saat')
                ->where('progID','=', $progID)
                ->where('tarihi','=', $tarihi)
                ->get();
        return array('duzenleme_yetkisi' => Auth::user()->can("gerceklesen-goruntule"), 'saatler' => $saatler);
    }
}
