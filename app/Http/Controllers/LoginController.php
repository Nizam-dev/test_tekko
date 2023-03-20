<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Models\User;


class LoginController extends Controller
{
    public function index()
    {
        if(Auth::check()){
                return redirect("/");
        }
        return view('login');
    }

    public function login(Request $request)
    {

        $validated = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $login = [
            "email" => $request->email,
            "password" => $request->password,
        ];

        if(!User::where("email",$request->email)->first()){
            return redirect()->back()->with('failed','Email Tidak ditemukan');
        }
        if(Auth::attempt($login)){
                return redirect("/");
        }else{
            return redirect()->back()->with('failed','Password Salah');
        }

    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
