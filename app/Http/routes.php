<?php

Route::get('/', function () {
    return view('home');
});

Route::group(['prefix' => 'ccc', 'as' => 'ccc.'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'CccController@index']);
    Route::get('create', ['as' => 'create', 'uses' => 'CccController@create']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CccController@edit']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CccController@destroy']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'CccController@update']);
    Route::post('store', ['as' => 'store', 'uses' => 'CccController@store']);
});

Route::group(['prefix' => 'cccista', 'as' => 'cccista.'], function(){
    Route::get('', ['as' => 'index', 'uses' => 'CccistaController@index']);
    Route::get('create', ['as' => 'create', 'uses' => 'CccistaController@create']);
    Route::get('edit/{id}', ['as' => 'edit', 'uses' => 'CccistaController@edit']);
    Route::get('destroy/{id}', ['as' => 'destroy', 'uses' => 'CccistaController@destroy']);
    Route::post('update/{id}', ['as' => 'update', 'uses' => 'CccistaController@update']);
    Route::post('store', ['as' => 'store', 'uses' => 'CccistaController@store']);
    
    Route::get('niver', ['as' => 'niver', 'uses' => 'CccistaController@aniversariantes']);
});