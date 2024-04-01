<?php

namespace App\Http\Controllers;

use PHPUnit\Util\Type;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class KDBController extends Controller
{
    public function index()
    {

        return view('k_d_b');

    }

}