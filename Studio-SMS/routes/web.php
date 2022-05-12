<?php

use Illuminate\Support\Facades\Route;
//uses the Navigation controller 
use App\Http\Controllers\Navigation;

Route::get('/',[Navigation::class, 'welcome']);


Route::get('/pre_welcome', [Navigation::class, 'pre_welcome']);


//Routes to the Controllers 
Route::get('/login',[Navigation::class, 'login']);

Route::get('/register',[Navigation::class, 'register']);
Route::resource('students', 'StudentController');
Route::resource('notes', 'NotesController');
Route::resource('evidence', 'EvidenceController');

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

