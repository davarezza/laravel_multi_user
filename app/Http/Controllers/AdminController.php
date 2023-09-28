<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    function index()
    {
        return view('admin');
    }
    function murid()
    {
        echo 'Halo, Selamat datang di halaman murid';
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function guru()
    {
        echo 'Halo, Selamat datang di halaman guru';
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
    function kepsek()
    {
        echo 'Halo, Selamat datang di halaman kepala sekolah';
        echo "<h1>". Auth::user()->name ."</h1>";
        echo "<a href='/logout'>Logout >></a>";
    }
}
