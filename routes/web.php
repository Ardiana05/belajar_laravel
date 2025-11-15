<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
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
    return view('beranda');
}); 

Route::get('/beranda', [PageController::class, 'index'])->name('beranda');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('hello', function() {
    return 'Hello, World!';
});

Route::get('/belajar', function() {
    echo '<h1>Selamat Datang</h1>';
    echo '<p>Ini adalah halaman belajar Laravel</p>';    
});