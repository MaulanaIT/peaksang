<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KawanPeakSangController extends Controller
{
    public function index() {
        return view('kawan_peak_sang');
    }
}
