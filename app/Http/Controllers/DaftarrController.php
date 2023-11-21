<?php

namespace App\Http\Controllers;

use App\Models\Daftar;
use Illuminate\Http\Request;

class DaftarrController extends Controller
{
    public function index()
    {
        return view('/daftar/all', [
            'title' => 'daftar',
            'daftarr' => Daftar::all(),
        ]);
    }

    public function show(Daftar $daftar)
    {
        return view('daftar.detail', ['daftar' => $daftar]);
    }
}
