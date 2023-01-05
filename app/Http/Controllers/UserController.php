<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    //
    public function listaccount(){
        $user = DB::table('users')->paginate(10);
        return view('user.list',['users' => $user]);
    }
    public function profile()
    {
        $user = User::all();
        return view('user.information',['users'=>$user]);
    }
    
}
