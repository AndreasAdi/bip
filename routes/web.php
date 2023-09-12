<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\BankingController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\SlideController;
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

Route::get("/", [HomeController::class, "index"]);

Route::get("/profile", function () {
    return view("profile");
});

Route::get("/contact", function () {
    return view("contactus");
})->name("contact");

Route::get("ceo-statement", function () {
    return view("ceo-statement");
});

Route::get("penghargaan", function () {
    return view("penghargaan");
});

Route::get("/banking", [BankingController::class, "index"]);

Route::get("/banking/list/{id}", [BankingController::class, "list"]);

Route::get("/banking/product/{id}", [BankingController::class, "detail"]);

Route::get("/it", [ItController::class, "index"]);
Route::get("/it/1", [ItController::class, "detail"]);

Route::post("kirimpesan", [ContactController::class, "handleKirimPesan"])->name(
    "kirim.pesan"
);

Route::controller(UploadController::class)->group(function () {
    Route::post("/upload", "store")->name("upload");
    Route::delete("/hapus", "destroy")->name("hapus");

    Route::post("/uploadbg", "storebg")->name("uploadbg");
    Route::delete("/hapusbg", "destroybg")->name("hapusbg");
});

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

Route::get("/dashboard", [ContactController::class, "index"])
    ->middleware(["auth", "verified"])
    ->name("dashboard");

Route::middleware("auth")->group(function () {
    Route::get("/admin", [ProductController::class, "index"])->name("admin");
    Route::get("/admin/product/insert", [
        ProductController::class,
        "insert",
    ])->name("product.insert");
    Route::post("/admin/product/insert", [
        ProductController::class,
        "prosesInsert",
    ]);
    Route::get("/admin/product/edit/{id}", [ProductController::class, "edit"]);
    Route::post("/admin/product/edit", [ProductController::class, "update"]);
    Route::post("admin/product/search", [ProductController::class, "search"]);
    Route::get("admin/product", [ProductController::class, "index"])->name(
        "product"
    );
    Route::get("/admin/product/delete/{id}", [
        ProductController::class,
        "delete",
    ]);
    Route::get("/admin/product/delete/image/{id}/{number}", [
        ProductController::class,
        "deleteImage",
    ]);
    Route::get("admin/brand", [BrandController::class, "index"])->name("brand");
    Route::get("admin/brand/insert", [BrandController::class, "insert"])->name(
        "brand.insert"
    );
    Route::post("admin/brand/insert", [BrandController::class, "store"]);
    Route::get("admin/brand/edit/{id}", [BrandController::class, "edit"]);
    Route::post("admin/brand/edit", [BrandController::class, "update"]);
    Route::get("admin/brand/delete/{id}", [BrandController::class, "delete"]);
    // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get("admin/slide", [SlideController::class, "index"])->name("slide");
    Route::get("admin/slide/create", [SlideController::class, "create"])->name(
        "slide.create"
    );
    Route::post("admin/slide/store", [SlideController::class, "store"]);
    Route::get("admin/slide/edit/{id}", [SlideController::class, "edit"])->name(
        "slide.edit"
    );
    Route::post("admin/slide/update", [SlideController::class, "update"]);
    Route::delete("admin/slide/delete/{id}", [
        SlideController::class,
        "delete",
    ])->name("slide.delete");
});

require __DIR__ . "/auth.php";
