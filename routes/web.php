<?php

Route::group(['middleware' => 'prevent-back-history'],function(){

Route::get('/dash', function () {
	if(Auth::check()){
    	return view('dash');
    }
    else {
		return Redirect::to('');
	}
});

Route::get('/', 'majumderController@home');
Route::get('/login', function () {
    return view('login');
});
Route::get('/register', function () {
    return view('register');
});
Route::post('/register_action', 'RegisterController@store');
Route::post('/login', 'RegisterController@login');
Route::get('/logout', function() {
	Auth::logout();
	return Redirect::to('');
}) -> middleware('auth');
                 // majumder
Route::get('/majumder_real', function () {
    return view('majumder.majumder_real');
});
Route::get('/majumder_timber', 'majumderController@timber');
Route::get('/majumder_furniture', function () {
    return view('majumder.majumder_furniture');
});
Route::get('/majumder_plaza', function () {
    return view('majumder.majumder_plaza');
});
Route::get('/majumder_market', function () {
    return view('majumder.majumder_market');
});
Route::get('/majumder_season', function () {
    return view('majumder.majumder_season');
});
             // majumder target
Route::get('/about_us', function () {
    return view('portfolio.about_us');
});
Route::get('/career', function () {
    return view('portfolio.career');
});
Route::get('/corporate_profile', function () {
    return view('portfolio.corporate_profile');
});
Route::get('/chairman_message', function () {
    return view('portfolio.chairman_message');
});
Route::get('/our_vision', function () {
    return view('portfolio.our_vision');
});
Route::get('/contact', 'ContactController@index');
Route::post('/contact', 'ContactController@contact');
Route::get('/upload', 'FileController@show') -> name('file');
Route::post('/upload', 'FileController@store');
            // Door Upload
Route::get('/furniture_upload', "DoorController@show_door");

Route::post('/double_door_upload', "DoorController@store_double_door");
Route::get('/double_door', "majumderController@double_door");

Route::post('/single_door_upload', "DoorController@store_single_door");
Route::get('/single_door', "majumderController@single_door");
                // Almirah Upload
Route::get('/almirah_upload', "FurnitureController@show_almirah");

Route::post('/single_almirah_upload', "FurnitureController@store_single_almirah");
Route::get('/single_almirah', "majumderController@single_almirah");

Route::post('/double_almirah_upload', "FurnitureController@store_double_almirah");
Route::get('/double_almirah', "majumderController@double_almirah");

            //admin

Route::get('/adminLogin', "AdminLoginController@show");
Route::post('/adminLogin', "AdminLoginController@login");
Route::get('/adminPanel', "AdminController@adminPanel");

Route::group(['middleware' => ['auth']], function() {
     Route::get('/city', 'CityHomeController@home');
});

// Route::get('/city', 'CityHomeController@home')->middleware('auth');
Route::post('/city', 'CityHomeController@cityHomeSystem');
Route::get('/cityCustomerData', 'CityHomeController@cityHomeListofCustomer');
Route::post('/search', 'CityHomeController@searchClients');
Route::get('/cityCustomerData/{id}', 'CityHomeController@getCustomer');
Route::get('/cityCustomerEdit/{id}', 'CityHomeController@editCustomer');
Route::post('/cityCustomerEdit', 'CityHomeController@updateCustomer');
Route::get('/cityInstallments/{id}', 'CityHomeController@cityInstallment');
Route::get('/editInstallers/{id}', 'CityHomeController@editInstaller');
Route::post('/InstallmentSave', 'CityHomeController@updateInstaller');
// Route::post('/cityInstallments', 'cityHomeController@cityInstallment');




});