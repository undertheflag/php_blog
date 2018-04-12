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
    $posts = Auth::user()->posts()->orderBy('created_at')->get();
    return view('posts', ['posts' => $posts]);
})->middleware('auth');

Route::get('/new',  function () {
    return view('new');
})->middleware('auth');//redirecting unauthenticated users :401 or 'login' (named route as following route definition)
Route::post('/new',  'Post\PostController@createPost');

Route::get('auth/register', 'Auth\RegisterController@showRegistrationForm'); //laravel\vendor\laravel\framework\src\Illuminate\Foundation\Auth
Route::post('auth/register', 'Auth\RegisterController@register');

Route::get('login', 'Auth\LoginController@showLoginForm')->name('login'); //for unauthenticated redirect
Route::post('login', 'Auth\LoginController@login');
Route::get('logout', 'Auth\LoginController@logout');
