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



use App\Http\Controllers\Students;
Route::resource('students',Students::class);

use App\Http\Controllers\Posts;
Route::resource('posts',Posts::class);
Route::get('users/posts/{student}','App\Http\Controllers\Students@display')->name('stdposts.show');