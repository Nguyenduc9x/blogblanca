<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function login(Request $request){
        // dd($validated->all());
        $validated = $request->validate([
            'email' => 'required|max:255',
            'password' => 'required|min:6',
        ]);
        // dd($validated);

        $credentials = $request->only('email', 'password');
        if(auth()->attempt($credentials)){
            return redirect()->intended('home')->withSuccess('You have Successfully Login!');
        }else{
            return redirect()->back()->withErrors(["email" => "Sai thông tin đăng nhập!"]);
        }
    }
    public function logout(){
        auth()->logout();
        return redirect('login'); // redirect()->route('login')
    }
}
