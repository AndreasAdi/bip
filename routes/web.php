<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankingController;
use App\Http\Controllers\ItController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use Illuminate\Support\Facades\Route;

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


Route::get('/profile', function () {
    return view('profile');
});

Route::get('/contact', function () {
    return view('contactus');
})->name('contact');


Route::get('ceo-statement', function () {
    return view('ceo-statement');
});

Route::get('penghargaan', function () {
    return view('penghargaan');
});


Route::get('/banking', [BankingController::class, 'index']);

Route::get('/banking/1', [BankingController::class, 'detail']);

Route::get('/it', [ItController::class, 'index']);
Route::get('/it/1', [ItController::class, 'detail']);

Route::post('kirimpesan', [ContactController::class, 'handleKirimPesan'])->name('kirim.pesan');

Route::controller(UploadController::class)->group(function () {
    Route::post('/upload', 'store')->name('upload');
    Route::delete('/hapus', 'destroy')->name('hapus');
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');


Route::get('/dashboard', [ContactController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/admin/product/insert', [ProductController::class, 'insert']);
    Route::post('/admin/product/insert', [ProductController::class, 'prosesInsert']);

    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
