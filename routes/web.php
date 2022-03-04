<?php

use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');


/* Rutas Públicas */
Route::get('/home', 'App\Http\Controllers\Public\HomeController@index')->name('home');
Route::get('/noticias', 'App\Http\Controllers\Public\NewsController@index')->name('news');
Route::get('/contacto', 'App\Http\Controllers\Public\ContactController@index')->name('contacto');

/* Rutas Admin */
Route::get('admin/home', 'App\Http\Controllers\Admin\HomeController@index')->name('adminHome');


Route::get('admin/news', 'App\Http\Controllers\Admin\NewsController@index')->name('adminNews');
Route::get('admin/news/create', 'App\Http\Controllers\Admin\NewsController@create')->name('adminNewsCreate');
Route::get('admin/news/edit/{id}', 'App\Http\Controllers\Admin\NewsController@edit')->name('adminNewsEdit');


/*Route::resource('admin/news', 'App\Http\Controllers\Admin\NewsController');*/
