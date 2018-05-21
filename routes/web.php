<?php

Route::group(['prefix' => LaravelLocalization::setLocale()], function()
{
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Auth::routes();

    /*
    |------------------------------------------------------------------------------------
    | Admin
    |------------------------------------------------------------------------------------
    */
    Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Role:5']], function() {
        Route::get('/', 'DashboardController@index')->name('dash');
        Route::resource('accounts', 'AccountController');
        Route::resource('towns','TownController');
        Route::resource('characters','CharacterController');
        Route::resource('groups','GroupController');
        Route::resource('guilds','GuildController');
        Route::resource('items','ItemController');


        Route::get('settings/website','SettingController@website')->name('website_settings');
        Route::get('settings/server','SettingController@server')->name('server_settings');
        Route::post('settings/website/save','SettingController@website_store');
        Route::post('settings/server/save','SettingController@server_store');
    });

    Route::get('/', function () {
        return view('welcome');
    });
});

