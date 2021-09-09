<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKitaController extends Controller
{
    public function index() {
        return view('tentang_kita');
    }
}
