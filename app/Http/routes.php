<?php

// Main routes
Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');


// Authentication routes
Route::get('login', 'CuratorController@getCuratorLogin');
Route::post('login', 'CuratorController@postCuratorLogin');

// Curation routes
Route::get('curator/create', 'CuratorController@getCreateCurator');
Route::post('curator/create', 'CuratorController@postCreateCurator');