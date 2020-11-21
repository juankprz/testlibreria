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


use Spatie\Browsershot\Browsershot;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/test', function () {
    Browsershot::url('http://192.168.1.9:8000')->setNodeModulePath("/home/user/blog/node_modules/")->noSandbox()->timeout(60)->savePdf('example.pdf');
});

