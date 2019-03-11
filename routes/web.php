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

Route::resource('customers', 'CustomerController')->only([
    'index', 'show', 'edit', 'update', 'create', 'store'
]);

Route::get('/', function () {
    return view('home', array(
        'destinations' => array(
            "https://www.tourismwinnipeg.com/" => "Winnipeg",
            "https://www.travelyukon.com/" => "Yukon",
            "https://www.visitrussia.com/" => "Russia"
        )
    ));
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
