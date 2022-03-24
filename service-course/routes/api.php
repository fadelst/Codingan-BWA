<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MentorController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::get('/mentors', [App\Http\Controllers\MentorController::class,'index']);
Route::get('/mentors/{id}', [App\Http\Controllers\MentorController::class,'show']);
Route::post('/mentors', [App\Http\Controllers\MentorController::class,'create']);
Route::put('/mentors/{id}', [App\Http\Controllers\MentorController::class,'update']);
Route::delete('/mentors/{id}', [App\Http\Controllers\MentorController::class,'destroy']);

Route::get('/courses', [App\Http\Controllers\CourseController::class,'index']);
Route::get('/courses/{id}', [App\Http\Controllers\CourseController::class,'show']);
Route::post('/courses', [App\Http\Controllers\CourseController::class,'create']);
Route::put('/courses/{id}', [App\Http\Controllers\CourseController::class,'update']);
Route::delete('/courses/{id}', [App\Http\Controllers\CourseController::class,'destroy']);

Route::get('/chapters', [App\Http\Controllers\ChapterController::class,'index']);
Route::get('/chapters/{id}', [App\Http\Controllers\ChapterController::class,'show']);
Route::post('/chapters', [App\Http\Controllers\ChapterController::class,'create']);
Route::put('/chapters/{id}', [App\Http\Controllers\ChapterController::class,'update']);
Route::delete('/chapters/{id}', [App\Http\Controllers\ChapterController::class,'destroy']);

Route::get('/lessons', [App\Http\Controllers\LessonController::class,'index']);
Route::get('/lessons/{id}', [App\Http\Controllers\LessonController::class,'show']);
Route::post('/lessons', [App\Http\Controllers\LessonController::class,'create']);
Route::put('/lessons/{id}', [App\Http\Controllers\LessonController::class,'update']);
Route::delete('/lessons/{id}', [App\Http\Controllers\LessonController::class,'destroy']);


Route::post('/image-courses', [App\Http\Controllers\ImageCourseController::class,'create']);
Route::delete('/image-courses/{id}', [App\Http\Controllers\ImageCourseController::class,'destroy']);

Route::post('/my-courses', [App\Http\Controllers\MyCourseController::class,'create']);
Route::get('/my-courses', [App\Http\Controllers\MyCourseController::class,'index']);
Route::post('/my-courses/premium', [App\Http\Controllers\MyCourseController::class,'createPremiumAccess']);

Route::post('/reviews', [App\Http\Controllers\ReviewController::class,'create']);
Route::put('/reviews/{id}', [App\Http\Controllers\ReviewController::class,'update']);
Route::delete('/reviews/{id}', [App\Http\Controllers\ReviewController::class,'destroy']);


