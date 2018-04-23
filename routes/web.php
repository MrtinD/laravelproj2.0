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

// Route::get('/', function () {
//     return view('page.login');
// });

//Login Controller
Route::get('/login','LoginController@index');
Route::post('/login/try','LoginController@store');
Route::get('/logout','LoginController@destroy');


//Auth::routes();
//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/register','RegisterController@create');
Route::post('/register/account','RegisterController@store');


//Post resource routing
//index(all posts) create(show form for creating) store(create the post) show(single post) edit(single post) update(the post) delete(the post)
Route::get('/','PostController@index');
Route::get('/posts/create','PostController@create');
Route::post('/posts/create/thepost','PostController@store');
Route::get('/posts/single/{id}','PostController@show');
Route::get('/posts/{userid}','PostController@spectouser');


