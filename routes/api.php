<?php

use App\Http\Controllers\IndexController;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get('/', function () {
//     return 'Hello World';
// });

Route::get('/', [IndexController::class, 'test']);

Route::get('/res', [IndexController::class, 'res']);

Route::get('/collection', [IndexController::class, 'collection']);

Route::post('/test-request', [IndexController::class, 'test_request']);

Route::get('/post2', [IndexController::class, 'post2']);

Route::post('/post-del', [IndexController::class, 'post_del']);