<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SesiController extends Controller
{
    function index() 
    {
        return view('login');
    }

    function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ],
        [
            'email.required' => 'Email wajib diisi',
            'password.required' => 'Password wajib diisi',
        ]);

        $infoLogin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infoLogin)) {
            if (Auth::user()->role == 'murid') {
                return redirect('/admin/murid'); // Perbaikan di sini
            } elseif (Auth::user()->role == 'guru') {
                return redirect('/admin/guru'); // Perbaikan di sini
            } elseif (Auth::user()->role == 'kepsek') {
                return redirect('/admin/kepsek'); // Perbaikan di sini
            }
        }
        
        return redirect('/')->withErrors('Username dan password yang dimasukkan tidak sesuai')->withInput();
    }

    function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
