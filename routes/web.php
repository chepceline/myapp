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
    Route::get( '/',  'PageController@index')->name('index');
    Route::get( '/blog',  'PageController@blog')->name('blog');
    Route::get( '/about',  'PageController@about')->name('about');
    Route::get( '/services',  'PageController@services')->name('services');
    Route::get( '/portfolio',  'PageController@portfolio')->name('portfolio');
    Route::get( '/team',  'PageController@team')->name('team');
    Route::get( '/blog_details',  'PageController@blog_details')->name('blog_details');
    Route::get('/test', 'PageController@test')->name('test');


});
// Admin routes
Route::namespace('App\Http\Controllers\Admin')->prefix('admin')->as('admin.')->group(function(){
    Route::get('/dashboard','AdminController@dashboard')->name('dashboard');
    Route::get('/users','AdminController@users')->name('users');
    Route::resource('/blog/categories', 'BlogCategoryController')->names([
        'index' => 'categories.list',
        'create' => 'categories.create',
        'store' => 'categories.store',
        'show' => 'categories.show',
        'edit' => 'categories.edit',
        'update' => 'categories.update',
        'destroy' => 'categories.destroy'

    ]);
    Route::resource('/post', 'PostController')->names([
        'index' => 'posts.list',
        'create' => 'posts.create',
        'store' => 'posts.store',
        'show' => 'posts.show',
        'edit' => 'posts.edit',
        'update' => 'posts.update',
        'destroy' => 'posts.destroy',

    ]);
});




