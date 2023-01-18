<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\dasboardController;
use App\Http\Controllers\homeController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\MentorController;
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

Route::get('/', [homeController::class,'index']);
Route::get('/class/{slug}', [homeController::class,'detailCourse']);
Route::get('/class/{slug}/{id}', [homeController::class, 'watchCourse']);
Route::get('/admin', [dasboardController::class, 'index']);


Route::prefix('admin')->group(function () {
    Route::resource('course', CourseController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('mentor', MentorController::class);
    Route::resource('lessons', LessonController::class);
});
