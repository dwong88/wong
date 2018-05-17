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
Route::get('/','PagesController@index');
/*Route::get('/', function () {
    return resource_path('views');
    return view('welcome');
});
*/

Route::get('blade','PagesController@blade');

Route::get('users/create',['uses'=>'UsersController@create']);

Route::post('users',['uses'=>'UsersController@store']);
/*
Route::get('users', function () {
  $users=[
    '0'=>[
      'first_name'=>'David',
      'last_name'=>'Wong',
      'location'=>'Indonesia'
    ],
    '1'=>[
      'first_name'=>'Jes',
      'last_name'=>'Limit',
      'location'=>'Evos'
    ]
  ];
    return $users;
});*/

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => 'authenticated'],function(){

  Route::get('profile','PagesController@profile');

  Route::get('settings','PagesController@settings');

  Route::get('users',['uses'=>'UsersController@index']);

});
