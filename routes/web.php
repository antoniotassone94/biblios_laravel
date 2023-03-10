<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\FrontendController;
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

Route::get("/",[FrontendController::class,"getHome"])->name("home");

Route::get("/home",function(){
    return redirect(route("home"));
});

Route::get("/detailBook/{id}",[FrontendController::class,"getBookDetail"])->name("detailBook");

Route::resource("author",AuthorController::class);

Route::resource("book",BookController::class);
