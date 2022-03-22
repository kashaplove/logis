<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin;
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

Route::get('/', 'MainController@index')->name('main');
Route::post('/', 'StoreController@index')->name('store');


Route::get('/login', 'HomeController@index')->name('login');


Route::group(['namespace' => 'Admin', 'middleware' => 'admin'], function (){
    Route::get('/admin', 'MainController@index')->name('admin.main');
    Route::group(['namespace' => 'Message', 'prefix' => 'admin'], function (){
        Route::get('/messages', 'IndexController@index')->name('admin.message.index');
        Route::delete('/messages/{message}', 'DeleteController@destroy')->name('admin.message.destroy');
    });
    Route::group(['namespace' => 'Post', 'prefix' => 'admin'], function () {
        Route::get('/posts', 'IndexController')->name('admin.post.index');
        Route::get('/posts/create', 'CreateController')->name('admin.post.create');
        Route::post('/posts', 'StoreController')->name('admin.post.store');
        Route::get('/posts/{post}', 'ShowController')->name('admin.post.show');
        Route::get('/posts/{post}/edit', 'EditController')->name('admin.post.edit');
        Route::patch('/posts/{post}', 'UpdateController')->name('admin.post.update');
        Route::delete('/posts/{post}', 'DestroyController')->name('admin.post.destroy');
    });

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
