<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PeakSangController extends Controller
{
    public function index() {
        return view('peak_sang');
    }
}
