<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;

class RegisterController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect("/");
        }
        return view('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            "nama"=>'required',
            "email"=>"required",
            "no_hp"=>"required",
            "password"=>"required"
        ]);

        $user =  $request->all();
        $user['password'] = bcrypt($request->password);
        User::create($user);
        return redirect('login')->with("success","Berhasil mendaftar silahkan login");

    }
}
