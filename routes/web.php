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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');


// Different ways to pass parameters
/* Route::get('/', function () {
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];
    // return view('welcome')->withTasks($tasks)->withFoo('bar');

    // return view('welcome')->with([
    //     'foo' => 'bar',
    //     'tasks' => $tasks
    // ]); 
    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'bar'
    ]);
}); */