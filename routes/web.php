<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddProductController;
use App\Http\Controllers\ProductController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
Route::get('/addProduct',[AddProductController::class,'index'])->name('add');
Route::post('/addProduct/store',[AddProductController::class,'store']);
Route::get('/',[ProductController::class,'index']);
Route::get('product/{id}',[ProductController::class,'show']);
Route::get('buy/{id}',[ProductController::class,'buyForm']);
Route::post('postZarin',[ProductController::class,'postZarin']);