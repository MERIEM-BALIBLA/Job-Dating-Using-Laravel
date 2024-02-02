<?php

use App\Http\Controllers\AnnoucmentController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\WelcomeController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/statistic', function () {
    return view('statistic/statistic');
});

// home
Route::get('/',[WelcomeController::class,'index'])->name('welcome.index');
// Route::get('/',[WelcomeController::class,'allAnnoucement'])->name('welcome.allAnnoucement');

// company
Route::get('/company',[CompanyController::class,'index'])->name('company.company');
Route::post('/company/create',[CompanyController::class,'create'])->name('company.create');

// Route::post('/company/show/{company}',[CompanyController::class,'show'])->name('company.show');
Route::get('/company/show/{company}', [CompanyController::class, 'show'])->name('company.singlePage');

Route::delete('/companies/deleteAll', [CompanyController::class, 'deleteAll'])->name('companies.deleteAll');

Route::get('/company/edit/{company}',[CompanyController::class,'edit'])->name('company.edit');
Route::patch('company/update/{company}',[CompanyController::class,'update'])->name('company.update');
Route::delete('company/destroy/{company}',[CompanyController::class,'destroy'])->name('company.delete');

// annoucement
Route::get('/annoucement',[AnnoucmentController::class,'index'])->name('annoucement.annoucement');

Route::get('/annoucement/show/{annoucment}', [AnnoucmentController::class, 'show'])->name('annoucement.singlePage');

Route::delete('/annoucements/deleteAll', [AnnoucmentController::class, 'deleteAll'])->name('annoucements.deleteAll');

// Route::get('/select',[AnnoucmentController::class,'select']);
Route::post('annoucement/create',[AnnoucmentController::class,'create'])->name('annoucement.create');
Route::get('annoucement/edit/{annoucment}',[AnnoucmentController::class,'edit'])->name('annoucement.edit');
Route::patch('annoucement/update/{annoucment}',[AnnoucmentController::class,'update'])->name('annoucement.update');
Route::delete('annoucement/destroy/{annoucment}',[AnnoucmentController::class,'destroy'])->name('annoucement.delete');






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
