<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\BlogController;

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AwardController;
use App\Http\Controllers\Admin\JobTypeController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\EducationController;
use App\Http\Controllers\Admin\ExperienceController;
use App\Http\Controllers\Admin\PositionController;
use App\Http\Controllers\Admin\SkillController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Company\CompanyController;
use App\Http\Controllers\Frontend\WebsiteController;
use App\Http\Controllers\Admin\UserProfileController;
use App\Http\Controllers\Candidate\CandidateController;


Route::name('web.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('sign-out', 'signOut')->name('sign-out');
});

// ADMIN ROUTE LIST =======================>
Route::name('admin.')->group(function () {
    Route::get('/admin', [AdminController::class, 'dashboard'])->name('dashboard');
    Route::resource('categories', CategoryController::class);
    Route::resource('job-types', JobTypeController::class);
    Route::resource('blogs', BlogController::class);
    Route::resource('position', PositionController::class);
    Route::resource('user', UserController::class);
    Route::resource('skill', SkillController::class);
    Route::resource('education', EducationController::class);
    Route::resource('experience', ExperienceController::class);
    Route::resource('award', AwardController::class);
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
