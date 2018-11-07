<?php

//use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('articulos', 'ArticuloController');

Route::resource('departamentos', 'DepartamentoController');