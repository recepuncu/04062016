<?php
// $user = User::where('username','=','admin')->first();
// $user->password=Hash::make('');
// $user->save();

Route::any('/', 'LoginController@loginkontrol');
Route::any('/logout',array('as' => 'logout','uses'=>'LoginController@logout'));
Route::any('/login', 'LoginController@index');
Route::post('/login', array('before' => 'csrf','uses' => 'LoginController@loginkontrol'));


// Bant Denetim Modülü Yetkileri ve Rotaları Bitti....
Entrust::routeNeedsPermission( 'bantdenetim', 'bant-denetim-duzenle', Redirect::to('/login') );
Entrust::routeNeedsPermission( 'bantdenetim/kontrol_et', 'bant-denetim-duzenle', Redirect::to('/login') );
Entrust::routeNeedsPermission( 'bantdenetim/denetim_kaydet', 'bant-denetim-duzenle', Redirect::to('/login') );
Route::get('/bantdenetim', 'BantDenetimController@index');
Route::post('/bantdenetim/kontrol_et', array('before' => 'csrf','uses' => 'BantDenetimController@kontrol_et'));
Route::post('/bantdenetim/denetim_kaydet', array('before' => 'csrf','uses' => 'BantDenetimController@denetim_kaydet'));
// Bant Denetim Modülü Yetkileri ve Rotaları Bitti....

// Tanımlamalar Yetkileri ve Rotaları Başladı....
Entrust::routeNeedsPermission( 'kullanicilar', 'kullanici-duzenle', Redirect::to('/login') );
Route::get('/kullanicilar', 'KullaniciController@index');
// Tanımlamalar Yetkileri ve Rotaları Bitti....

// Herkese açık kullanılan rotalar
Route::get('/fragman', 'FragmanController@index');
Route::get('/akilli-isaretler', 'FragmanController@akilli_isaretler');
// Route::get('/aktar', 'AnasayfaController@aktar');