<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class RegisterController extends Controller
{
    
    public function register()
{
    return view('register.index');
}

public function store(Request $request)
{

   $validateData = $request->validate([

        'name'=>'required|max:200|min:4|unique:users',
        'email'=>'required|email:dns|unique:users',
        'password'=>'required|min:4|max:200'
    ]);

    $kredensial=$validateData['password'] = bcrypt($validateData['password']);

//  return $request->all(); 
User::create($validateData);

return redirect('/login'); 
}

}
