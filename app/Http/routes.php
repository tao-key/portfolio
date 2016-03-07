<?php

Route::get('/home', 'PanelController@index');

Route::get('/admin/panel', function() {
	return view('admin/home');
});

Route::get('admin/login', function() {
	return view('auth/login');
});

Route::get('admin/panel/home', function() {
	$panel_homes = DB::table('panel_home')->get();
	return view('admin/config_home')->with('panel_homes', $panel_homes);
});

Route::get('admin/panel/projets', function() {
	return view('admin/config_projets');
});

Route::get('admin/panel/contact', function() {
	return view('admin/config_contact');
});

Route::get('/index', function() {
	return view('index');
});

Route::get('/projets', function() {
	return view('projets');
});

Route::get('/test', function() {
	return view('test');
});

Route::get('/contact_me', 'ContactController@getForm');
Route::post('contact_me/send', 'ContactController@send');

Route::get('admin/panel/home/edit/{id}', 'PanelController@edit');
Route::post('admin/panel/home/update', 'PanelController@update');

Route::resource('panel', 'PanelController');