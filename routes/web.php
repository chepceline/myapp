<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;



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





Route::namespace('\App\Http\Controllers')->group(function(){
    Route::get( '/',  'PageController@index');
    Route::get( '/blog',  'PageController@blog');
    Route::get( '/about',  'PageController@about');
    Route::get( '/contact',  'PageController@contact');

});
