<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\authmodel;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class auth_controller extends Controller
{
    public function login(){
        return view('login');
    }

    public function loginsubmit(Request $request){
        $login = $request->validate([
            'username' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($login)){
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('LoginError', 'Username atau password salah');
    }
    public function daftar(){
    return view('daftar');
    }

    public function daftarpost(Request $request){
        Pengguna::create([
            'nis' => $request->nis,
            'fullname' => $request->fullname,
            'username' => $request->username,
            'password' => bcrypt($request->password),
            'kelas' => $request->kelas,
            'alamat' => $request->alamat,
        ]); 
            return redirect('/');
    }

    public function dashboard()
    {
        return view('/dashboard');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
