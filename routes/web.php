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

// Route::get('/', function () {
//     return view('welcome');
// });

// Index
Route::get('/', 'HomeController@index')->name('home.index');
Route::get('/privacy', 'HomeController@privacy')->name('home.privacy');
Route::get('/domande-frequenti', 'HomeController@faq')->name('home.faq');

// Studenti
Route::get('/students', 'StudentController@index')->name('student.index');
Route::get('/students/show/{id}', 'StudentController@show')->name('student.show');
