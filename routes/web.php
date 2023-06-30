<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\Book;
use App\Http\Controllers\BookController;
use App\Http\Controllers\WipDomainController;
use App\Http\Controllers\WipGroupController;
use App\Http\Controllers\WipUserController;
use App\Models\WipDomain;
use Illuminate\Http\Request;

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

Route::group(['middleware' => 'auth'], function() {
});


// Yamazaki-san's Video to make Book Shop
Route::get('/book', [BookController::class, 'index'])->name('book_index');
Route::post('/books', [BookController::class, 'store'])->name('book_store');
Route::post('/booksedit/{book}', [BookController::class, 'edit'])->name('book_edit');
Route::get('/booksedit/{book}', [BookController::class, 'edit'])->name('edit');
Route::post('/books/update', [BookController::class, 'update'])->name('book_update');
Route::delete('/book/{book}', [BookController::class, 'destroy'])->name('book_destory');

// WIP DOMAIN (Company):: Routings
Route::get('/domains', [WipDomainController::class, 'index'])->name('domain_index');
Route::post('/domain', [WipDomainController::class, 'store'])->name('domain_store');
Route::post('/domainedit/{domain_id}', [WipDomainController::class, 'edit'])->name('domain_edit');
Route::get('/domainedit/{domain_id}', [WipDomainController::class, 'edit'])->name('edit');
Route::post('/domain/update', [WipDomainController::class, 'update'])->name('domain_update');
Route::delete('/domain/{domain_id}', [WipDomainController::class, 'destroy'])->name('domain_destroy');

// WIP GROUP :: Routings
Route::get('/groups', [WipGroupController::class, 'index'])->name('group_index');
Route::post('/group', [WipGroupController::class, 'store'])->name('group_store');
Route::post('/groupedit/{group_id}', [WipGroupController::class, 'edit'])->name('group_edit');
Route::get('/groupedit/{group_id}', [WipGroupController::class, 'edit'])->name('edit');
Route::post('/group/update', [WipGroupController::class, 'update'])->name('group_update');
route::delete('/group/{group_id}', [WipGroupController::class, 'destroy'])->name('group_destroy');

// WIP USERS :: Routings
Route::get('/users', [WipUserController::class, 'index'])->name('user_index');
Route::post('/user', [WipUserController::class, 'store'])->name('user_store');
Route::post('/useredit/{user_id}', [WipUserController::class, 'edit'])->name('user_edit');
Route::get('/useredit/{user_id}', [WipUserController::class, 'edit'])->name('edit');
Route::post('/user/update', [WipUserController::class, 'update'])->name('user_update');
Route::delete('/user/{user_id}', [WipUserController::class, 'destroy'])->name('user_destroy');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
