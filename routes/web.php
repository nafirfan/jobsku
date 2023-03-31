<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\ContactUsController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/findJobs', [HomeController::class, 'jobList'])->name('home.findJobs');

// Contact Form
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

// Company and Job
Route::get('/jobs', [HomeController::class, 'jobList'])->name('home.jobs');
Route::get('/jobs/{id}', [HomeController::class, 'jobDetails'])->name('home.job.details');
Route::get('/companies', [HomeController::class, 'companyList'])->name('home.companies');
Route::get('/companies/{id}', [HomeController::class, 'companyDetails'])->name('home.company.details');


// Default for all roles
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/settings', [UserController::class, 'updatePassword'])->name('user.updatePassword');
});

// Candidate
Route::middleware(['auth', 'verified', 'role.check:candidate'])->group(function () {
    Route::get('/resume', [CandidateController::class, 'profile'])->name('candidate.profile');
    Route::get('/dashboard', [CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('/appliedJobs', [CandidateController::class, 'appliedJobs'])->name('candidate.appliedJobs');
    Route::get('/bookmarkJobs', [CandidateController::class, 'bookmarkJobs'])->name('candidate.bookmarkJobs');
});

// Company
Route::prefix('company')->middleware(['auth', 'verified', 'role.check:company'])->group(function () {
    Route::get('/dashboard', [CompanyController::class, 'dashboard'])->name('company.dashboard');
    Route::get('/profile', [CompanyController::class, 'profile'])->name('company.profile');
    Route::get('/jobList', [CompanyController::class, 'jobList'])->name('company.jobList');
    Route::get('/jobDetails', [CompanyController::class, 'jobDetails'])->name('company.jobDetails');
    Route::get('/jobPost', [CompanyController::class, 'jobPost'])->name('company.jobPost');
});

require __DIR__ . '/auth.php';
