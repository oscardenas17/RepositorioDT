<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RepositorioController;

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
    
Route::get('/repositorios', 'RepositorioController@index')->name('repositorios.index');
Route::get('/repositorios/create', 'RepositorioController@create')->name('repositorios.create');
Route::post('/repositorios', 'RepositorioController@store')->name('repositorios.store');

Auth::routes();


