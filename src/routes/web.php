<?php

// use Illuminate\Http\Request;

Route::group(['namespace'=>'Mihpack\Contact\Http\Controllers'],function(){
    Route::get('contact','TaskController@index')->name('contact');
    Route::post('contact', 'TaskController@send');
});
