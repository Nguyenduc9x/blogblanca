<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
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

        public function profileUpdate(Request $request)
    {
        //validation rules

        $request->validate([
            'name' => 'min:4|string|max:255',
            'email' => 'email|string|max:255',
            'date_birth' => 'date|string|max:255',
            // 'image' => 'nullable|image|mimes:jpg,png,jpeg,gif,svg|max:2048|dimensions:min_width=100,min_height=100,max_width=500,max_height=500',
        ]);
        // dd($request->all());
        // $imageName = time() . '.' . $request->file('image')->extension(); 
        if($request->hasFile('image')){
        $image = $request->file('image');
        $filename = time() . '.' . $image->getClientOriginalExtension();
        Image::make($image)->resize(300, 300)->save( public_path('/uploads/avatars/' . $filename ) );
        }

        $user =Auth::user();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->image = $filename;
        // $user->image = $request['image']->storeAs('storage',$imageName);
        $user->bio = $request['bio'];
        $user->birthday = Carbon::parse($request['birthday'])->format('Y-m-d');
        $user->save();



        return back()->with('success', 'Update success');
    }
}
