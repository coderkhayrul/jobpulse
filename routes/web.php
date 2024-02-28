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
use App\Http\Middleware\AdminMiddleware;

Route::name('web.')->controller(WebsiteController::class)->group(function () {
    Route::get('/', 'home')->name('home');
    Route::get('/jobs', 'jobs')->name('jobs');
    Route::get('/about', 'about')->name('about');
    Route::get('/blogs', 'blogs')->name('blogs');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('sign-out', 'signOut')->name('sign-out');
});

// ADMIN ROUTE LIST =======================>
Route::name('admin.')->prefix('admin')->middleware(['auth', 'admin'])->group(function () {
    Route::get('/', [AdminController::class, 'dashboard'])->name('dashboard');
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
Route::name('company.')->prefix('company')->controller(CompanyController::class)->middleware(['auth', 'company'])->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/my-profile', 'myProfile')->name('my-profile');
    Route::post('/my-profile', 'myProfileStore')->name('my-profile.store');
    Route::get('/change-password', 'changePassword')->name('password-change');
    Route::get('/manage-candidate', 'manageCandidate')->name('manage-candidate');
    Route::get('/manage-jobs', 'manageJobs')->name('manage-jobs');
    Route::get('/job-post', 'jobPost')->name('job-post');
    Route::get('/logout', 'logout')->name('logout');
});

// CANDIDATE ROUTE LIST ===================>
Route::name('candidate.')->prefix('candidate')->controller(CandidateController::class)->middleware(['auth', 'candidate'])->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/my-profile', 'myProfile')->name('my-profile');
    Route::get('/change-password', 'changePassword')->name('change-password');
    Route::get('/my-resume', 'myResume')->name('my-resume');
    Route::get('/manage-jobs', 'manageJobs')->name('manage-jobs');
    Route::get('/logout', 'logout')->name('logout');
});


require __DIR__ . '/auth.php';
// require __DIR__ . '/company.php';
// require __DIR__ . '/candidate.php';
