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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('localization/{lang?}', 'LanguageLocalizationController@index')->name('localization.index');
//language switcher


Route::get('/', function () {
    return redirect('/websites');
});


Route::resource('websites', 'WebsitesController');

Route::resource('users', 'UserController');



Auth::routes();
//register route disabled at vendor\laravel\framework\src\Illuminate\Routing\Router.php
//custom registration made


//Route::get('/home', 'HomeController@index')->name('home');
