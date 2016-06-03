<?php

Route::get('api/user', 'UserController@getUsers');
Route::post('api/user', 'UserController@store');