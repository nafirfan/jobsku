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
// Authentication
//Route::get('register', [AuthController::class, 'register'])
//    ->middleware('guest')
//    ->name('register');

//Route::get('/dashboard', function () {
//    return view('dashboard');
//})->middleware(['auth', 'verified'])->name('dashboard');

// Home
// Route::get('/', [DashboardController::class, 'show'])->name('welcome');

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/findJobs', [HomeController::class, 'jobList'])->name('home.findJobs');
Route::get('/faq', [HomeController::class, 'faq'])->name('home.faq');
Route::get('/contact', [HomeController::class, 'contact'])->name('home.contact');
Route::post('/contact', [ContactUsController::class, 'store'])->name('contact.store');

Route::get('/companyList', [HomeController::class, 'companyList'])->name('home.companyList');
Route::get('/companyDetails', [HomeController::class, 'companyDetails'])->name('home.companyDetails');
Route::get('/jobList', [HomeController::class, 'jobList'])->name('home.jobList');
Route::get('/jobDetails', [HomeController::class, 'jobDetails'])->name('home.jobDetails');

Route::middleware(['auth', 'verified'])->group(function () {
    // candidate
    Route::get('/dashboard', [CandidateController::class, 'dashboard'])->name('candidate.dashboard');
    Route::get('/profile', [CandidateController::class, 'profile'])->name('candidate.profile');
    Route::get('/appliedJobs', [CandidateController::class, 'appliedJobs'])->name('candidate.appliedJobs');
    Route::get('/bookmarkJobs', [CandidateController::class, 'bookmarkJobs'])->name('candidate.bookmarkJobs');
    Route::get('/settings', [CandidateController::class, 'settings'])->name('candidate.settings');
    Route::post('/settings', [UserController::class, 'updatePassword'])->name('user.updatePassword');


    // company
    Route::get('/dashboardCompany', [CompanyController::class, 'dashboard'])->name('company.dashboard');
    Route::get('/jobListCompany', [CompanyController::class, 'jobList'])->name('company.jobList');
    Route::get('/profileCompany', [CompanyController::class, 'profile'])->name('company.profile');
    Route::get('/settingsCompany', [CompanyController::class, 'settings'])->name('company.settings');
    Route::post('/settingsCompany', [UserController::class, 'updatePassword'])->name('user.updatePassword');
    Route::get('/jobDetailsCompany', [CompanyController::class, 'jobDetails'])->name('company.jobDetails');
    Route::get('/jobPostCompany', [CompanyController::class, 'jobPost'])->name('company.jobPost');



    // Edit Resume
    Route::get('/resume', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/resume', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/resume', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
