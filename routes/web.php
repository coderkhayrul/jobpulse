<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\JobTypeController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Candidate\CandidateController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::name('web.')->group(function () {
    Route::get('/', [WebsiteController::class, 'home'])->name('home');
    Route::get('/jobs', [WebsiteController::class, 'jobs'])->name('jobs');
    Route::get('/about', [WebsiteController::class, 'about'])->name('about');
    Route::get('/contact', [WebsiteController::class, 'contact'])->name('contact');
});

// ADMIN ROUTE LIST =======================>
Route::name('admin.')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('job-types', JobTypeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('position', PositionController::class);
});

// COMPANY ROUTE LIST =====================>
Route::name('company.')->group(function () {
    Route::get('/company', [CompanyController::class, 'dashboard'])->name('dashboard');
});

// CANDIDATE ROUTE LIST ===================>
Route::name('candidate.')->group(function () {
    Route::get('/candidate', [CandidateController::class, 'dashboard'])->name('dashboard');
});


require __DIR__ . '/auth.php';
// require __DIR__ . '/company.php';
// require __DIR__ . '/candidate.php';
