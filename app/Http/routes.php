<?php
use Illuminate\Support\Facades\Input;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['prefix' => 'Admin'],function(){
    Route::get('/', 'AdminController@Admin_view_all')
        ->name('Admin.Admin_view_all');
    Route::get('/Admin_view_insert', 'AdminController@Admin_view_insert')
        ->name('Admin.Admin_view_insert');
    Route::get('/Admin_process_insert', 'AdminController@Admin_process_insert')
        ->name('Admin.Admin_process_insert');
});

Route::group(['prefix' => 'User'],function(){
    Route::get('/', 'UserController@User_view_all')
        ->name('User.User_view_all');
    Route::get('/User_view_insert', 'UserController@User_view_insert')
        ->name('User.User_view_insert');
    Route::get('/User_process_insert', 'UserController@User_process_insert')
        ->name('User.User_process_insert');
});

Route::group(['prefix' => 'Category'],function(){
    Route::get('/', 'CategoryController@Category_view_all')
        ->name('Category.Category_view_all');
    Route::get('/Category_view_insert', 'CategoryController@Category_view_insert')
        ->name('Category.Category_view_insert');
    Route::get('/Category_process_insert', 'CategoryController@Category_process_insert')
        ->name('Category.Category_process_insert');
});
