<?php

use App\Http\Controllers\Candidate\CandidateController;
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

Route::name('candidate.')->prefix('candidate')->controller(CandidateController::class)->middleware(['auth', 'candidate'])->group(function () {
    Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::get('/my-profile', 'myProfile')->name('my-profile');
    Route::post('/my-profile', 'myProfileStore')->name('my-profile.store');
    Route::get('/change-password', 'changePassword')->name('change-password');
    Route::get('/my-resume', 'myResume')->name('my-resume');
    Route::get('/manage-jobs', 'manageJobs')->name('manage-jobs');
    Route::get('/logout', 'logout')->name('logout');
});
