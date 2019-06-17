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

Route::view('/', 'welcome');

Route::get('/inventories', 'InventoriesController@list');

Route::view('/inventories/create', 'inventories/create');

// Route::get('/amirul', function() {

//     $skills = ['PHP', 'HTML', 'CSS'];

//     return view('team/amirul', [
//         'skills' => $skills
//     ]);
// });