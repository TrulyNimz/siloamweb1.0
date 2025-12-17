<?php
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AcademicController;
use App\Http\Controllers\SchoolController;
use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');;
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/school/admission', [HomeController::class, 'admission'])->name('school.admission');
Route::get('/academic/faqs', [HomeController::class, 'faqs'])->name('academic.faqs');
Route::get('/academic/academic', [AcademicController::class, 'academic'])->name('academic.academic');
Route::get('/academic/pptt', [AcademicController::class, 'pptt'])->name('academic.pptt');
Route::get('/academic/cna', [AcademicController::class, 'cna'])->name('academic.cna');
Route::get('/academic/orthopedics',[AcademicController::class, 'orthopedics'])->name('academic.orthopedics');
Route::get('/academic/programs', [AcademicController::class, 'programs'])->name('academic.programs');
Route::get('/academic/packages', [AcademicController::class, 'packages'])->name('academic.packages');
Route::get('/school/dean', [SchoolController::class, 'dean'])->name('school.dean');
Route::get('/school/team', [HomeController::class, 'team'])->name('school.team');
// show form
Route::get('/academic/application', [ApplicationController::class, 'create'])->name('academic.application');
// handle form submission
Route::post('/apply', [ApplicationController::class, 'store'])->name('academic.application.store');
Route::get('/contact', [ContactController::class, 'index'])->name('contact.form');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');