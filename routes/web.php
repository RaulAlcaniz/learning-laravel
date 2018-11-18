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
    $tasks = [
        'Go to the store',
        'Go to the market',
        'Go to work'
    ];

    // Different ways to pass parameters
    // return view('welcome')->withTasks($tasks)->withFoo('bar');

    // return view('welcome')->with([
    //     'foo' => 'bar',
    //     'tasks' => $tasks
    // ]); 
    return view('welcome', [
        'tasks' => $tasks,
        'foo' => 'bar'
    ]);
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});