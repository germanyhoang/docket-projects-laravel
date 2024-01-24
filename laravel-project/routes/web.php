<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/web/*', function () {
//     return view('welcome');
// });

Route::get('/{path?}', [
    'uses' => function () {
        return view('index');
    },
    'as' => 'react',
    'where' => ['path' => '.*']
]);
