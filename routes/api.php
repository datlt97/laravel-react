<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Route::group(['prefix' => 'post'], function(){
   Route::get('', [PostController::class, 'index'])->name('list');
   Route::post('', [PostController::class, 'store'])->name('create');
   Route::get('{id}', [PostController::class, 'show'])->name('detail');
   Route::post('{id}', [PostController::class, 'update'])->name('update');
   Route::post('/delete/{id}', [PostController::class, 'destroy'])->name('delete');
});
