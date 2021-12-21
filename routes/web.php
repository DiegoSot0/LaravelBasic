<?php
Route::view('/','home')->name('home');
Route::view('/about','about')->name('about');
Route::view('/portafolio','portafolio')->name('portafolio');
Route::view('/contact','contact')->name('contact');

Route::post('contact','MessagesController@store');