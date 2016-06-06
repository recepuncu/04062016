<?php

class LoginController extends Controller {

    public function index() {
        return View::make('login');
    }

    public function loginkontrol() {
        if (Auth::check()) {
            $user = User::find(Auth::user()->id);
            return View::make('anasayfa')->with(compact('user'));
        }
        else {
            $credentials = Input::only('username', 'password');
            if (Auth::attempt($credentials)) { // bilgiler doğruysa
                $user = User::find(Auth::user()->id);
                return View::make('anasayfa')->with(compact('user'));
            }
            return Redirect::to('/login')->with('flash_notice', 'You don\'t have access!'); // bilgiler yanlışsa
        }
    }

    public function logout(){
        Auth::logout();
        return Redirect::to('/login');
    }
}
