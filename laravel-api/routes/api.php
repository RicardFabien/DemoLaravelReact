<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Controller\Http\Controllers\CommentController;

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

Route::get('/messages', function () {
    return 'Message';
});

Route::get('/message/{id}',function (string $id) {
    return 'Message '.$id;
});

