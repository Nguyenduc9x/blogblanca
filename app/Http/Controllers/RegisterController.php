<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function register()
    {
        return view('auth.register');
    }

    public function createuser(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required|unique:users|max:255',
            'name' => 'required|max:255',
            'password' => 'required|confirmed|min:6',
            // 'repassword' => 'required|same:password|min:6'
            // 'terms' => 'required|accepted',
        ]);
        
        $input = $request->all();
         
        User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);

        return redirect('login')->with('success', 'You have registered successfuly, now you can login');
    }

    
}
