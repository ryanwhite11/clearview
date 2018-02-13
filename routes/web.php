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
Route::get('/admin', 'NewsController@admin')->name('admin');
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');



//news
Route::get('/admin/news/', 'NewsController@form')->name('addNews');
Route::post('/admin/news/add', 'NewsController@create');
Route::get('/news/{id}', 'HomeController@newsSingle')->name('news');
//Route::get('/news/{id}?page={item}', 'HomeController@newsSingle');
Route::get('/admin/news/delete/{id}', 'NewsController@delete');
Route::get('/admin/news/edit/{id}', 'NewsController@edit');
Route::post('/admin/news/edit/', 'NewsController@update');


//news
Route::get('/admin/project/', 'ProjectController@form')->name('addProject');
Route::post('/admin/project/add', 'ProjectController@create');
Route::get('/admin/project/delete/{id}', 'ProjectController@delete');
Route::get('/admin/project/edit/{id}', 'ProjectController@edit');
Route::post('/admin/project/edit/', 'ProjectController@update');


//Forms





