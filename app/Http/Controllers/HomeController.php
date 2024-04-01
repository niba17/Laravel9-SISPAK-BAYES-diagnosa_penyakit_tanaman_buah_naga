<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\GejalaPenyakit;
use App\Models\PenyakitSolusi;
use App\Models\Gejala;
use App\Models\Solusi;
use PHPUnit\Util\Type;
use App\Models\Penyakit;
use App\Models\Pakar;

class HomeController extends Controller
{
    public function index(Type $var = null)
    {
        $akun = User::all();
        $gejala = Gejala::all();
        $penyakit = Penyakit::all();
        $solusi = Solusi::all();
        $gejala_penyakit = GejalaPenyakit::all();
        $penyakit_solusi = PenyakitSolusi::all();
        $pakar = Pakar::all();

        return view('home', ['akun' => $akun, 'gejala' => $gejala, 'penyakit' => $penyakit, 'gejala_penyakit' => $gejala_penyakit, 'penyakit_solusi' => $penyakit_solusi, 'pakar' => $pakar, 'solusi' => $solusi]);
    }
}