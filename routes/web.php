<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;
use App\Http\Controllers\WipCompanyController;
use App\Models\WipCompany;

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

Route::get('/test', [TestController::class, 'test'])->name('test');

Route::get('/', function () {
    return view('welcome');
});

// Display list of companies
Route::get('/company', [WipCompanyController::class, 'index'])->middleware(['auth'])->name('company_index');

//add a company
Route::post('/company/add', [WipCompanyController::class, 'store'])->name('company_store');

//delete a company
Route::delete('/company/{company_id}', [WipCompanyController::class, 'destroy'])->name('company_destroy');

//update a company
Route::post('/company/update', [WipCompanyController::class, 'update'])->name('company_update');



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
