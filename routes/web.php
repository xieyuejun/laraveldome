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
/*
Route::get('user/{id}',function($id){
    return  'user-'.$id;
});

Route::match(['get','post'], 'foo' ,function(){
	return 'match function';
});

Route::any('fee',function(){
	return 'fee goods';
});

Route::get('get/{id}/{name}',function($id,$name){
    return 'id-'.$id.'-name-'.$name;
})->where(['id'=>'[a-z]+','name'=>'[0-9]+']);

Route::get('user/profile',function(){
	 return 'my url---'.route('profile');
})->name('profile');
*/

Route::get('redirect', function() {
    // 通过路由名称进行重定向
    return redirect()->route('profile');
});

Route::get('/user/profile','UserController@showProfile')->name('profile');

/*
Route::middleware(['first', 'second'])->group(function(){
	  Route::get('user/info',function(){
	  	  return 'user-info';
	  });

	  Route::get('user/center',function(){
	  	 return 'user-center';
	  });
});*/

Route::prefix('admin')->group(function () {
    Route::get('users', function () {
        return 'users';
    });
});