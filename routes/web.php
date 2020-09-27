<?php

use App\Http\Controllers\UserController;
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

Route::get('/', fn() => redirect('login'))->middleware('guest');

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
	Route::get('dashboard', fn() => view('dashboard'))->name('dashboard');
	
	Route::get('counter', fn() => view('counter'))->name('counter');

	Route::get('contact-form', fn() => view('contact-form'))->name('contact-form');
    
    Route::get('search-dropdown', fn() => view('search-dropdown'))->name('search-dropdown');
    
    Route::get('data-table', fn() => view('data-table'))->name('data-table');
    
    Route::get('post-comment', fn() => view('post-comment'))->name('post-comment');
});