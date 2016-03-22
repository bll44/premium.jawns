<?php
// Main routes
Route::get('/', 'HomeController@index');
Route::get('about', 'HomeController@about');


// Authentication routes
Route::get('login', 'AuthController@getCuratorLogin');
Route::post('login', 'AuthController@postCuratorLogin');
Route::get('logout', 'AuthController@logout');

// Curation routes
Route::get('curator/create', 'CuratorController@getCreateCurator');
Route::post('curator/create', 'CuratorController@postCreateCurator');

// Playlist routes
Route::get('playlists', 'PlaylistController@index');
Route::get('playlists/create', 'PlaylistController@create');
Route::post('playlist', 'PlaylistController@store');