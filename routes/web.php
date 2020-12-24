<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/become-exxpert', [App\Http\Controllers\BecomeExxpertController::class, 'index'])->name('becomeExxpert.index');
Route::get('/selectservices', [App\Http\Controllers\BecomeExxpertController::class, 'servies'])->name('becomeExxpert.service');
Route::get('/businessgoal', [App\Http\Controllers\BecomeExxpertController::class, 'businessgoal'])->name('becomeExxpert.businessgoal');
Route::get('/progress', [App\Http\Controllers\BecomeExxpertController::class, 'progress'])->name('becomeExxpert.progress');

// users
Route::get('/myaccount', [App\Http\Controllers\UserController::class, 'index'])->name('myaccount');
Route::get('/userprofile', [App\Http\Controllers\UserController::class, 'show'])->name('profile');
Route::get('/mymessages', [App\Http\Controllers\UserController::class, 'messages'])->name('mymessages');
Route::get('/myalerts', [App\Http\Controllers\UserController::class, 'alerts'])->name('myalerts');
Route::get('/updateprofile', [App\Http\Controllers\UserController::class, 'update'])->name('updateprofile');

 
// pages
Route::get('/instantsearch', [App\Http\Controllers\PagesController::class, 'instantsearch'])->name('instantsearch');
Route::get('/searchresults', [App\Http\Controllers\PagesController::class, 'search'])->name('search');
Route::get('/showservice', [App\Http\Controllers\PagesController::class, 'show'])->name('showservice');
Route::get('/services', [App\Http\Controllers\PagesController::class, 'index'])->name('service');
