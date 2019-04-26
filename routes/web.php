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
    return view('welcome',['name' => '学院君']);
});

Route::get('hello', function () {
    return 'Hello, Welcome to LaravelAcademy.org';
});

//传递参数
Route::get('user/{id}',function($id){
    return  'user-'.$id;
});

Route::match(['get','post'], 'foo' ,function(){
	return 'match function';
});

Route::any('fee',function(){
	return 'fee goods';
});