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
    Route::group(['prefix' => ADMIN, 'as' => ADMIN . '.', 'middleware'=>['auth', 'Type:3']], function() {
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

    Route::get('account', 'SiteAccountController@index')->name('site_account');
    Route::get('account/create_character', 'SiteAccountController@create_character')->name('site_account_create_character');
    Route::post('account/grk', 'SiteAccountController@generate_rk')->name('site_account_generate_rk');
    Route::delete('account/dchar/{id}', 'SiteAccountController@delete_character')->name('site_account_delete_char');
    Route::patch('account/udchar/{id}', 'SiteAccountController@undelete_character')->name('site_account_undelete_char');

    Route::get('/', function () {
        return view('site.blog.index');
    })->name('blog');
});

