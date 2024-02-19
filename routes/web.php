<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('admin.dashboard');
});

Route::get('/category', [CategoryController::class, 'categoryPage'])->name('categoryPage');
Route::post('/category-create', [CategoryController::class, 'CategoryCreate'])->name('categoryCreate');
Route::get('/category-list', [CategoryController::class, 'CategoryList'])->name('CategoryList');
Route::post('/category-update', [CategoryController::class, 'CategoryUpdate'])->name('categoryDelete');
Route::delete('/category-delete', [CategoryController::class, 'CategoryDelete'])->name('categoryDelete');




// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });


// ADMIN ROUTE LIST ==========>
// Route::prefix('admin')->name('admin.')->group(function () {

//     Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
// });









require __DIR__ . '/auth.php';
require __DIR__ . '/company.php';
// require __DIR__ . '/candidate.php';
