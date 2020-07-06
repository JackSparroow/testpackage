<?php


Route::group(['namespace'=>'Codestacx\Contact\Http\Controller'],function (){

    Route::get('/contact','ContactController@index')->name('index');
    Route::post('/send/','ContactController@send')->name('contact.send');

});

