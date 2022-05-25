<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengguna;

class LoginController extends Controller
{
    public function index()
    {
        return view('login');
    }

    public function daftar()
    {
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
    public function ayam()
    {
        return view('dashboard');
    }
}


