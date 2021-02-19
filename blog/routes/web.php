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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'Front@main');

Route::get('/detail', 'Front@detail');

Route::get('/greeting', 'Front@greeting');

Route::get('/product_list', 'Front@product_list');
Route::get('/product_view', 'Front@product_view');

Route::get('/board_list', 'Front@board_list');

Route::get('/board_view', 'Front@board_view');

Route::get('/cutomer/manual', 'Front@cutomer');
Route::get('/cutomer/as', 'Front@cutomer');


// Route::get('/lifefo/lifefo_consumables', 'Front@lifefo');
// Route::get('/listar/lifefo_list', 'Front@lifefo');

// Route::get('/listar/listar_robot', 'Front@listar');
// Route::get('/listar/listar_wireless', 'Front@listar');
// Route::get('/listar/listar_consumables', 'Front@listar');

// Route::get('/vacuum/list', 'Front@product_detail');
// Route::get('/consumables/list', 'Front@product_detail');