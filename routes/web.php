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

Route::group([
    'middleware' => [],
    'namespace' => 'App\Http\Controllers',
    'prefix' => '/invoice'
], function ($router) {
    Route:: get('/add', 'InvoicesController@create')->name("add.invoice");
});
