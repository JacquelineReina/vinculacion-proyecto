<?php


use App\Libro;

Route::get('/', 'PagesController@inicio');

Route::get('/detalle/{id}', 'PagesController@detalle')->name('libros.detalle');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

