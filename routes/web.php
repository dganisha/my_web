<?php

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

Route::get('/', function () {
    // return view('welcome');
    return view('index');
});

Route::get('/blog', [App\Http\Controllers\Admin\BlogController::class, 'client_index'])->name('blog');
Route::get('/blog/{slug}', [App\Http\Controllers\Admin\BlogController::class, 'client_detail'])->name('blog.show');

Route::group(['prefix' => 'admin'], function(){
    Route::group(['prefix' => 'blog'], function(){
        Route::get('create', [App\Http\Controllers\Admin\BlogController::class, 'create_view'])->name('admin.blog.create_view');
        Route::post('create', [App\Http\Controllers\Admin\BlogController::class, 'create'])->name('admin.blog.create');
    });
});