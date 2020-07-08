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

//Frontend
Route::get('/', function () {
    return view('welcome');
});

//Backend

//Login
Route::get('admin/login','LoginAdminController@getLogin');
Route::post('admin/login','LoginAdminController@postLogin');
Route::get('admin/logout','LoginAdminController@getLogout');

Route::group(['prefix' => 'admin','middleware' => 'adminLogin'], function () {
    
    Route::get('/', function () {
        return view('admin.layout.index');
    });


    //Display Index Page
    Route::get('/hangsanxuat', 'HangSanXuatController@index')->name('hangsanxuat.index');

    // Populate Data in Edit Modal Form
    Route::get('hangsanxuat/{hangsanxuat_id?}', 'HangSanXuatController@show');

    //create New Product
    Route::post('hangsanxuat', 'HangSanXuatController@store');

    // update Existing Product
    Route::put('hangsanxuat/{hangsanxuat_id}', 'HangSanXuatController@update');

    // delete product
    Route::delete('hangsanxuat/{hangsanxuat_id}', 'HangSanXuatController@destroy');
});

// Route::resource('phieudat','PhieuDat');
