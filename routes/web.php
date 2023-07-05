<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DashboardControler;
use App\Http\Controllers\ProdukController;
use App\Http\Controllers\KategoriProdukController;
use App\Http\Controllers\PesananController;
// use Auth;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;



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
    return view('welcome');
});
//routing dirinya sendiri
route::get('/salam', function(){
    return 'Assalamualaikum';
});
//routing mengarahkan ke view
route::get('/hallo', function(){
    return view ('hallo');
});
route::get('/after_register', function(){
    return view ('after_register');
    
});
route::get('/hallo2', function(){
    return view('hallo.halloworld');
});
// Buat route kabar dengan view kondisi
Route::get('/kabar', function () {
    return view('kondisi');
});

Route::get('/kesehatan', function () {
    return view('kesehatan');
});
Route::get('/form', [FormController::class, 'index']);
Route::post('/hasil', [FormController::class, 'store']);

Route::get('/forminput', function () {
    return view('forminput');
});

Route::group(['middleware' => ['auth', 'role:admin-manager']], function(){
Route::get('/dashboard', [DashboardControler::class, 'index'])->name('dashboard');
Route::get('/produk', [ProdukController::class, 'index'])->name('produk');
Route::get('/kategori_produk', [KategoriProdukController::class, 'index'])->name('kategori_produk');
Route::get('/pesanan', [PesananController::class, 'index'])->name('pesanan');


Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/produk', [ProdukController::class, 'index']);
Route::get('/produk/create', [ProdukController::class, 'create']);
Route::post('/produk/store', [ProdukController::class, 'store']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});