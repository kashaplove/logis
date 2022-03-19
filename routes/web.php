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

});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
