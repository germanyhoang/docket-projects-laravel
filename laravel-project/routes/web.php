<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductCartController;
use App\Http\Controllers\DetailProductImageController;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\BillForTour;
use App\Enums\UserRole;
use App\Enums\Category;
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

// Route::get('/{path?}', [
//     'uses' => function () {
//         return view('index');
//     },
//     'as' => 'react',
//     'where' => ['path' => '.*']
// ]);

// Route::get('/', function () { return 'test-docker'; });

// Route::fallback(function () {
//     return view('index');
// });

// Route::prefix('posts')->name('posts.')->group(function(){
//     Route::get('/', [PostController::class, 'index'])->name('index');
//     Route::get('/add', [PostController::class, 'add'])->name('add');
//     Route::get('/update', [PostController::class, 'update'])->name('update');
//     Route::get('/delete', [PostController::class, 'delete'])->name('delete');
// });
// Route::prefix('products')->name('products.')->group(function(){
//     Route::get('/', [ProductController::class, 'index'])->name('index');
//     Route::get('/add', [ProductController::class, 'add'])->name('add');
//     Route::get('/update', [ProductController::class, 'update'])->name('update');
//     Route::get('/delete', [ProductController::class, 'delete'])->name('delete');
// });

Route::get('/{id}', function ($id) {
    return BillForTour::find(1)->status();
});


