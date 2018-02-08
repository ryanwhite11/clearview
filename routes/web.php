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
use App\News;

Route::get('/', 'HomeController@index')->name('home');

Route::get('/about', function () {

	$news = News::all();
    return view('about', ['news' => $news]);
});

Route::get('/equipment', function () {
    return view('equipment');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

//Admin Routes
Route::get('/admin', function () {
    return view('admin');
});

//news
Route::get('/admin/news/', 'NewsController@form')->name('addNews');
Route::post('/admin/news/add', 'NewsController@create');
Route::get('/news/show/', 'NewsController@show');


//news
Route::get('/admin/project/', 'ProjectController@form')->name('addProject');
Route::post('/admin/project/add', 'ProjectController@create');


