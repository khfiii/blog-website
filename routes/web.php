<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurnalController;
use App\Http\Controllers\NewslatterController;
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


Route::controller(HomeController::class)->group(function(){
    Route::get('/', 'show')->name('home');

});



Route::controller(BlogController::class)->group(function(){
    Route::get('blog', 'show')->name('blog');

});

Route::controller(JurnalController::class)->group(function(){
    Route::get('jurnal', 'show')->name('jurnal');

});

Route::controller(BookController::class)->group(function(){
    Route::get('book', 'show')->name('book');

});

Route::controller(NewslatterController::class)->group(function(){
    Route::get('newslatter', 'show')->name('newslatter');

});

Route::controller(CourseController::class)->group(function(){
    Route::get('course', 'show')->name('course');

});
