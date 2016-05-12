<?php

Route::resource('makers','MakerController',['except'=>['create','edit']]);

Route::resource('vehicles','VehicleController',['only'=>['index','show']]);
Route::resource('makers.vehicles','MakerVehiclesController',['except'=>['create','edit']]);

