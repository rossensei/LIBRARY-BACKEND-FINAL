<?php

use App\Http\Controllers\BorrowController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::get('/students',[StudentController::class, 'index']);
Route::get('/students/{student}',[StudentController::class,'show']);
Route::post('/students',[StudentController::class, 'store']);
Route::put('/students/{student}', [StudentController::class, 'update']);
Route::delete('/students/{student}',[StudentController::class, 'destroy']);

Route::get('/books',[BookController::class,'index']);
Route::get('/books/{book}',[BookController::class,'show']);
Route::post('/books',[BookController::class, 'store']);
Route::put('/books/{book}',[BookController::class, 'update']);
Route::delete('/books/{book}',[BookController::class,'destroy']);

Route::get('/borrows',[BorrowController::class, 'index']);
Route::get('/borrows/{borrow}', [BorrowController::class, 'show']);
Route::post('/borrows', [BorrowController::class, 'store']);
Route::put('/borrows/{borrow}',[BorrowController::class, 'update']);