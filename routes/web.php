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
  return view('public.home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
  return view('dashboard');
})->name('dashboard');


/* Rutas Públicas */
Route::get('/home', 'App\Http\Controllers\Public\HomeController@index')->name('publicHome');
Route::get('/noticias', 'App\Http\Controllers\Public\NewsController@index')->name('publicNews');
Route::get('/contacto', 'App\Http\Controllers\Public\ContactController@index')->name('publicContact');
Route::post('/contacto', 'App\Http\Controllers\Public\ContactController@store')->name('publicContactStore');

/* Rutas Admin */
Route::get('admin/home', 'App\Http\Controllers\Admin\HomeController@index')->name('adminHome');


/*
Route::get('admin/news', 'App\Http\Controllers\Admin\NewsController@index')->name('adminNews');
Route::get('admin/news/create', 'App\Http\Controllers\Admin\NewsController@create')->name('adminNewsCreate');
Route::post('admin/news/store', 'App\Http\Controllers\Admin\NewsController@store')->name('adminNewsStore');
Route::get('admin/news/edit/{id}', 'App\Http\Controllers\Admin\NewsController@edit')->name('adminNewsEdit');
Route::patch('admin/news/edit/{id}', 'App\Http\Controllers\Admin\NewsController@update')->name('adminNewsUpdate');
Route::delete('admin/news/{id}', 'App\Http\Controllers\Admin\NewsController@destroy')->name('adminNewsDestroy');
*/

Route::resource('admin/news', 'App\Http\Controllers\Admin\NewsController', [
  'names' => [
    'index' => 'adminNews',
    'create' => 'adminNewsCreate',
    'store' => 'adminNewsStore',
    'edit' => 'adminNewsEdit',
    'update' => 'adminNewsUpdate',
    'destroy' => 'adminNewsDestroy'
  ]
]);

Route::resource('admin/home', 'App\Http\Controllers\Admin\HomeController', [
  'names' => [
    'index' => 'adminHome',
    'edit' => 'adminHomeEdit',
    'update' => 'adminHomeUpdate',
  ]
]);
