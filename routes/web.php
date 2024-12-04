<?php

use App\Http\Controllers\LoginController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use Illuminate\Http\Request;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/LandingPage', [HomeController::class, 'index'])->name('pages.home');
Route::get('/event/{id}', [HomeController::class, 'show'])->name('pages.detail');



Route::get('/', function () {
    return view('Halaman_Login'); // Menampilkan halaman login
})->name('login');

Route::post('/', [LoginController::class, 'authenticate'])->name('login.post');
// Route::get('/id', function () {
//     return view('id');
// })->middleware('auth');

