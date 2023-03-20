<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;


class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $users = User::all();
        return view('index',compact('users'));
    }

    public function tambah()
    {
        return view('tambah');
    }

    public function post(Request $request)
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
        return redirect('/')->with("success","Berhasil");
        
    }

    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('edit',compact('user'));

    }

    public function update($id, Request $request)
    {

        $request->validate([
            "nama"=>'required',
            "email"=>"required",
            "no_hp"=>"required",
        ]);

        $user =  $request->all();
        User::find($id)->update($user);
        
        return redirect('/')->with("success","Berhasil");

    }

    public function hapus($id)
    {
        User::find($id)->delete();
        return redirect()->back();

    }
}
