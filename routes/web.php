<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProgramdarwisController;

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

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => "home"
    ]);
});

Route::get('/profil', function () {
    return view('profil', [
        "title" => "Profil",
        "active" => 'profil'
    ]);
});


Route::get('/pokdarwis', function () {
    return view('pokdarwis', [
        "title" => "Pokdarwis",
        "active" => 'pokdarwis'
    ]);
});

Route::get('/digitalmap', function () {
    return view('digitalmap', [
        "title" => "Digital Map",
        "active" => 'digitalmap'
    ]);
});

Route::get('/pertanian', function () {
    return view('pertanian', [
        "title" => "Pertanian"
    ]);
});

Route::get('/peternakan', function () {
    return view('peternakan', [
        "title" => "Peternakan"
    ]);
});

Route::get('/alam', function () {
    return view('alam', [
        "title" => "Alam"
    ]);
});

Route::get('/galeri', function () {
    return view('galeri', [
        "title" => "Galeri"
    ]);
});

Route::get('/kontak', function () {
    return view('kontak', [
        "title" => "Kontak"
    ]);
});

Route::get('/programdarwis', function () {
    return view('programdarwis', [
        "title" => "Program Pokdarwis"
    ]);
});

Route::get('/paket', function () {
    return view('paket', [
        "title" => "Paket"
    ]);
});

Route::get('/berita', function () {
    return view('berita', [
        "title" => "Berita"
    ]);
});

Route::get('/produk', function () {
    return view('produk', [
        "title" => "Produk"
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', function(){
        return view('dashboard.index', [
            'title' => 'Dashboard'
        ]);
    });

    Route::get('/tabel', [ProgramdarwisController::class, 'index']);
    Route::get('/tabel/create', [ProgramdarwisController::class, 'create'])->name('dashboard.tabel.create');

});