<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hello()
    {
        return 'Selamat Datang';
    }

    public function about()
    {
        return 'Nama: Azzahra Attaqina, NIM: 2341720224';
    }

    public function articles()
    {
        return 'Halaman Artikel dengan ID: {$id}';
    }
}
