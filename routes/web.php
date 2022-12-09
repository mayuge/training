<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PostController; 
/*
|--------------------------------------------------------------------------
| Web Routes
@@ -13,6 +13,6 @@
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/',[PostController::class,'index']);
Route::get('/posts/create',[PostController::class,'create']);
Route::get('/posts/{post}',[PostController::class,'show']);
Route::post('/posts',[PostController::class,'store']);