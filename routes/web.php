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

Route::get('/', 'BerandaController@index');

Route::get('search','BerandaController@search');

Route::get('detail/{kampung_id}','BerandaController@detail');

Route::post('komentar/{kampung_id}','BerandaController@komentar');

Route::get('kampung/kategori/{kategori_id}','BerandaController@kampung_kategori');

Route::group(['middleware'=>'auth'],function(){
	Route::get('/admin','Admin\Beranda_controller@index');

	//Untuk Management Kategori
	Route::get('admin/kategori','Admin\Kategori_controller@index');
	Route::get('admin/kategori/add','Admin\Kategori_controller@add');
	Route::post('admin/kategori/add','Admin\Kategori_controller@store');
	Route::get('admin/kategori/{id}','Admin\Kategori_controller@edit');
	Route::put('admin/kategori/{id}','Admin\Kategori_controller@update');
	Route::delete('admin/kategori/{id}','Admin\Kategori_controller@delete');

	//Untuk Managemen Kampung
	Route::get('admin/kampung','Admin\Kampung_controller@index');
	Route::get('admin/kampung/add','Admin\Kampung_controller@add');
	Route::post('admin/kampung/add','Admin\Kampung_controller@store');
	Route::get('admin/kampung/{kampung_id}','Admin\Kampung_controller@edit');
	Route::put('admin/kampung/{kampung_id}','Admin\Kampung_controller@update');
	Route::delete('admin/kampung/{kampung_id}','Admin\Kampung_controller@delete');

	//Untuk Managemen komentar
	Route::get('admin/komentar','Admin\Komentar_controller@index');
	Route::get('hapus/komentar/{id}','Admin\Komentar_controller@delete');

	//Untuk managemen user
	Route::get('admin/user','Admin\User_controller@index');
	Route::get('admin/user/add','Admin\User_controller@add');
	Route::post('admin/user','Admin\User_controller@store');
	Route::get('admin/user/{id}','Admin\User_controller@edit');
	Route::put('admin/user/{id}','Admin\User_controller@update');
	Route::delete('admin/user/{id}','Admin\User_controller@delete');

});



Auth::routes();

Route::get('/home', function(){
	return redirect('admin');

});

Route::get('keluar',function(){
	\Auth::logout();

	return redirect('login');
});
