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


//Route for posts
Route::get('/posts', 'PostController@index')->name('posts');


// Route for generate form
Route::get('file-upload', [FileUploadController::class, 'fileUpload'])->name('file.upload');

// Route for POST
Route::post('file-upload', [FileUploadController::class, 'fileUploadPost'])->name('file.upload.post');