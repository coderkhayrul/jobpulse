<?php

use App\Http\Controllers\Company\CompanyController;
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
