<?php
    Route::get('/','PagesController@index');

    Route::get('/amigos', 'PagesController@amigos');

    Route::get('/sobre', 'PagesController@sobre');
    