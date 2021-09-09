<?php

use App\Http\Controllers\AlaMinsangController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\FaqController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\KawanPeakSangController;
use App\Http\Controllers\MerchController;
use App\Http\Controllers\PartnershipController;
use App\Http\Controllers\PeakSangController;
use App\Http\Controllers\TentangKitaController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/ala-minsang', [AlaMinsangController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/faq', [FaqController::class, 'index']);
Route::get('/kawan-peak-sang', [KawanPeakSangController::class, 'index']);
Route::get('/merch', [MerchController::class, 'index']);
Route::get('/partnership', [PartnershipController::class, 'index']);
Route::get('/peak-sang', [PeakSangController::class, 'index']);
Route::get('/tentang-kita', [TentangKitaController::class, 'index']);