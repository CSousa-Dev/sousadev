<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\HomeController@index');

Route::get('/home', function () {
    return view('pages.home');
});

Route::get('/contato', function () {
    return view('pages.contact');
});

Route::get('/projetos', 'App\Http\Controllers\ProjectController@index');

Route::get('/projeto/{slug}', 'App\Http\Controllers\ProjectController@show');

Route::get('/sobre', function () {
    return view('pages.about');
});

Route::get('/certificacoes', function () {
    return view('pages.certifications');
});

Route::get('/certificacao/{certificacao}', function () {
    return view('pages.certification');
});

Route::get('/blog', function () {
    return view('pages.blog');
});
