<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\TaskCommentController;
use App\Http\Controllers\ProjectCommentController;
use App\Http\Controllers\UserProjectController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::resource('projects', ProjectController::class);
Route::resource('tasks', TaskController::class);
Route::resource('task-comments', TaskCommentController::class);
Route::resource('project-comments', ProjectCommentController::class);
Route::resource('user-projects', UserProjectController::class);
