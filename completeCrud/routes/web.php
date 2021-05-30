<?php

use Illuminate\Support\Facades\Route;



Route::get('/', 'crudController@homeFun')
       ->name('home');
       
Route::get('match/{id}', 'crudController@matchFun')
       ->name('match');   

Route::get('formMatch', 'crudController@formFun')
       ->name('formMatch');      

Route::post('addMatch', 'crudController@addMatch')
       ->name('addMatch');   