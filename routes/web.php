<?php

use App\Http\Controllers\Auth\HomeController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;

Route::get('/', function () {
    return view('welcome');
});

// Rutas de registro
Route::middleware('guest')->group(function () {
    Route::get('/register', [RegisterController::class, 'index'])->name('register.index');
    Route::post('/register', [RegisterController::class, 'store'])->name('register.store');
});

// Rutas de inicio de sesión
Route::middleware('guest')->group(function () {
    Route::get('/login', [LoginController::class, 'index'])->name('login');
    Route::post('/login', [LoginController::class, 'store'])->name('login.store');
});

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::controller(CourseController::class)->group(function () {

    Route::get('/course/{course:slug}', 'index')->name('course.index');
    Route::post('/course/{course:slug}/like', 'like')->name('course.like');
    Route::get('/all-courses', 'all')->name('courses.all');

});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::controller(ProfileController::class)->group(function () {
    Route::get('/{user:username}', 'index')->name('profile.index');
});



Route::controller(LessonController::class)->group(function (){
    Route::get('/course/{course:slug}/lessons/{lesson}' , 'index')->name('lesson.index');
});


