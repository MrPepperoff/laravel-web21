<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;

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
/*
                            Route::prefix('admin')->group(function(){
                                Route::prefix('global')->group(function(){
                                    Route::controller(AdminController::class)->group(function(){
                                        Route::get('/','index');
                                    });
                                });
                                Route::controller(UserController::class)->group(function(){
                                    Route::get('/','index');
                                });
                            });
*/

// Route::get('/db1', [IndexController::class, 'db1']); групировка \/

Route::controller(IndexController::class)->group(function(){
    Route::get('/','index')->name('index');
    Route::get('/contact','contact')->name('contact');
    Route::get('/about','about')->name('about');
    
    Route::prefix('category')->group(function(){
        Route::get('/','categories')->name('category');
        Route::get('/{alias}','category')->name('category_alias');
    });



    
    Route::get('/posts/{flag?}','posts')->name('posts');
    Route::get('/db1/{id?}/{name?}','db1')-> name('db1');
    Route::get('/delete-post/{id}','deletepost')->name('deletepost');
    Route::get('/update-post/{id}','updatepost')->name('updatepost');
    
    Route::post('/db2','db2')-> name('db2');
    Route::post('/obr','obr');
    Route::post('/obr_db','obr_db');

});





