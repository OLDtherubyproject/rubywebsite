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

    Route::get('account', 'AccountController@show')->name('accounts.show');
    Route::get('account/create_character', 'CharacterController@create')->name('characters.create');
    Route::post('account/create_character', 'CharacterController@store')->name('characters.store');
    Route::get('account/friends', 'AccountViplistController@show')->name('accounts.viplist.show');
    
    Route::post('account/generate_rk', 'AccountController@generate_rk')->name('accounts.generate_rk');
    Route::delete('account/delete_character/{id}', 'CharacterController@destroy')->name('characters.destroy');
    Route::patch('account/undelete_character/{id}', 'CharacterController@undestroy')->name('characters.undestroy');

    Route::get('/', function () {
        return view('site.blog.index');
    })->name('blog');
});

