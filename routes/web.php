<?php

//use App\Barang;
use Illuminate\Http\Request;

Route::get('/',function(){
	return view('welcome');
});
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/barang', 'BrgController@brg');
Route::get('/barang/edit/{id}','BrgController@edit');
Route::post('/barang/act_edit','BrgController@act_edit');
Route::post('/barang/save','BrgController@insert');
Route::get('/barang/delete/{id}','BrgController@delete');
Route::get('/tampil','BrgController@barg');
Route::get('/lte','BrgController@tampil');
Route::post('/lte/save','BrgController@insert');
Route::get('/test','BrgController@getBasic');
Route::get('/test/get','BrgController@getBasicData');

//Route::get('/insert', 'BrgController@insert');
