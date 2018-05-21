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

Route::get('/blog/category/{slug?}', 'BlogController@category')->name('category');
Route::get('/blog/article/{slug?}', 'BlogController@article')->name('article');



/*Группа для маршрута */
/* 'prefix' для маршрута админ  прастранства имен
'Admin' прописиваем здесь чтобы не писать во всех маршрутов внутры группи
'middleware'=>['auth'] прописиваем здесь чтобы не писать в контролерах и каждой строкы
 */
Route::group(['prefix'=>'admin','namespace'=>'Admin','middleware'=>['auth']], function (){
    Route::get('/','DashboardController@dashboard')->name('admin.index');
    Route::resource('/category','CategoryController',['as'=>'admin']);  /*Ресурсный ('/путь', 'наименование контроллера', ['as'=>'admin']-чтоб у нас не переплеталбся с дркгимы ресурсами ) */
    Route::resource('/article','ArticleController',['as'=>'admin']);
    Route::resource('/products','ProductController',['as'=>'admin']);
        Route::group(['prefix'=>'user_managment','namespace'=>'UserManagment'], function (){
            Route::resource('/user','UserController',['as'=>'admin.user_managment']);
        });
});

Route::get('/', function () {
    return view('blog.home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home'); /* После регистаци переноправляет на home */
