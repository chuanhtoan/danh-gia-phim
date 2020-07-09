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

    //Quan ly hang san xuat
    Route::group(['prefix' => 'hangsanxuat'], function () {
        //Display Index Page
        Route::get('/', 'HangSanXuatController@index')->name('hangsanxuat.index');
        // Populate Data in Edit Modal Form
        Route::get('/{hangsanxuat_id?}', 'HangSanXuatController@show');
        //create New Product
        Route::post('/', 'HangSanXuatController@store');
        // update Existing Product
        Route::put('/{hangsanxuat_id}', 'HangSanXuatController@update');
        // delete product
        Route::delete('/{hangsanxuat_id}', 'HangSanXuatController@destroy');
    });
    
    //Quan ly the loai
    Route::group(['prefix' => 'theloai'], function () {
        Route::get('/','TheLoaiController@index')->name('theloai.index'); //Display Index Page
        Route::get('/{theloai_id?}','TheLoaiController@show'); // Populate Data in Edit Modal Form
        Route::post('/','TheLoaiController@store'); //create New Product
        Route::put('/{theloai_id}','TheLoaiController@update'); // update Existing Product
        Route::delete('/{theloai_id}','TheLoaiController@destroy'); // delete product
    });

    //Quan ly phim
    Route::group(['prefix' => 'phim'], function () {
        Route::get('/','PhimController@index')->name('phim.index'); //Display Index Page
        Route::get('/{phim_id?}','PhimController@show'); // Populate Data in Edit Modal Form
        Route::post('/','PhimController@store'); //create New Product
        Route::put('/{phim_id}','PhimController@update'); // update Existing Product
        Route::delete('/{phim_id}','PhimController@destroy'); // delete product
    });

    //Quan ly nhan vat
    Route::group(['prefix' => 'nhanvat'], function () {
        Route::get('/','NhanVatController@index')->name('nhanvat.index'); //Display Index Page
        Route::get('/{nhanvat_id?}','NhanVatController@show'); // Populate Data in Edit Modal Form
        Route::post('/','NhanVatController@store')->name('nhanvat.store'); //create New Product
        Route::put('/{nhanvat_id}','NhanVatController@update')->name('nhanvat.update'); // update Existing Product
        Route::delete('/{nhanvat_id}','NhanVatController@destroy'); // delete product
    });

});
