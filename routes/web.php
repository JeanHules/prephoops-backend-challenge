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

Route::get('/', function () {
    return view('welcome');
});

/*
placed so /nav goses to the api/dev route as I wanted nav as an api route
but did not want to change the default behaviour if this was a full project
I may or may not do this depening on the requirements
*/
Route::redirect('/nav', '/api/nav');
