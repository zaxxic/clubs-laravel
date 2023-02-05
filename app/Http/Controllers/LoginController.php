<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{
    public function login()
{
    return view('login.index');
}

public function kelogin(Request $request)
{
    
    $kredensial=$request->validate([
        'name'=>'required|min:4',
        'password'=>'required'
    ]);
    if(Auth::attempt($kredensial)){
        $request->session()->regenerate();
        return redirect()->intended('/dashboard');
    }
    return Redirect::back()->withErrors(['msg' => 'login gagal']);
    dd('berhasil login');
}

public function logout(){


    Auth::logout();

    request()->session()->invalidate();
    request()->session()->regenerateToken();

    return redirect('/login');


}
    

}