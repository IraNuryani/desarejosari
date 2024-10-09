<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TemaController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\BidangController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PokdarwisController;
use App\Http\Controllers\TemaWisataController;
use App\Http\Controllers\ProgramUserController;
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

Route::get('/programdarwis', [ProgramUserController::class, 'index'])->name('program.index');

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

Route::get('/detail/program/{id}', [ProgramdarwisController::class, 'show'])->name('detail.show');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

Route::middleware('auth', 'verified')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard.index');
    Route::get('/tabel/program', [ProgramdarwisController::class, 'index'])->name('dashboard.tabel.program.index');
    Route::get('/tabel/program/create', [ProgramdarwisController::class, 'create'])->name('dashboard.tabel.program.create');
    Route::post('/tabel/program/store', [ProgramdarwisController::class, 'store'])->name('dashboard.tabel.program.store');
    Route::get('/tabel/program/edit/{id}', [ProgramdarwisController::class, 'edit'])->name('dashboard.tabel.program.edit');
    // update data
    Route::put('/tabel/program/update/{id}', [ProgramdarwisController::class, 'update'])->name('dashboard.tabel.program.update');
    // route delete
    Route::delete('/tabel/program/{id}', [ProgramdarwisController::class, 'destroy'])->name('dashboard.tabel.program.destroy');
    Route::get('/dashboard/chart', [ProgramdarwisController::class, 'chart'])->name('dashboard.tabel.program.chart');
    

    Route::get('/tabel/bidang', [BidangController::class, 'index'])->name('dashboard.tabel.bidang.index');
    Route::get('/tabel/bidang/create', [BidangController::class, 'create'])->name('dashboard.tabel.bidang.create');
    Route::post('/tabel/bidang/store', [BidangController::class, 'store'])->name('dashboard.tabel.bidang.store');
    Route::get('/tabel/bidang/{id}/edit', [BidangController::class, 'edit'])->name('dashboard.tabel.bidang.edit');
    // update data
    Route::put('/tabel/bidang/{id}', [BidangController::class, 'update'])->name('dashboard.tabel.bidang.update');
    // route delete
    Route::delete('/tabel/bidang/{id}', [BidangController::class, 'destroy'])->name('dashboard.tabel.bidang.destroy');


    Route::get('/tema', [TemaController::class, 'index'])->name('dashboard.tema.index');
    Route::get('/tema/create', [TemaController::class, 'create'])->name('dashboard.tema.create');
    Route::post('/tema/store', [TemaController::class, 'store'])->name('dashboard.tema.store');
    Route::get('/tema/{id}/edit', [TemaController::class, 'edit'])->name('dashboard.tema.edit');
    Route::put('/tema/{id}', [TemaController::class, 'update'])->name('dashboard.tema.update');
    Route::delete('/tema/{id}', [TemaController::class, 'destroy'])->name('dashboard.tema.destroy');
    Route::get('/pokdar', [PokdarwisController::class, 'index']);

    Route::get('/users', [UserController::class, 'index'])->name('users.index');
    


});
Auth::routes();

