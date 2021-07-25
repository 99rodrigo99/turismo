<?php

use App\Http\Controllers\User\ViewsController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

Auth::routes();

Route::group(['prefix'=>'home','namespace'=>'admin','middleware'=>'auth'],function(){
    Route::get('/', 'HomeController@index')->name('admin.home');
    Route::resource('files', 'FilesController')->names('admin.files');
});

Route::group(['namespace'=>'User'],function(){
    Route::get('/', 'ViewsController@index');
    Route::get('tours', 'ViewsController@tours');
    Route::get('hoteles', 'ViewsController@hoteles');
    Route::get('blog', 'ViewsController@blog');
});
