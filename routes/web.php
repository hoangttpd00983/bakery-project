<?php

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
    return view('welcome');
});

Route::get('index',[
	'as'=>'trang-chu',
	'uses'=>'PageController@getIndex'
]);

Route::get('chi-tiet-san-pham/{id}',[
	'as'=>'chitietsanpham',
	'uses'=>'PageController@getChiTietSanPham'
]);

Route::get('gio-hang',[
	'as'=>'gio-hang',
	'uses'=>'PageController@getGioHang'
]);

Route::get('dang-nhap',[
	'as'=>'dang-nhap',
	'uses'=>'PageController@getDangNhap'
]);

Route::get('add-to-cart/{id}',[
	'as' => 'themgiohang',
	'uses' => 'PageController@getAddtoCart'
]);
