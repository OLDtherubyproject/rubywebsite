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

        Route::get('filemanager', '\Unisharp\Laravelfilemanager\controllers\LfmController@show')->name('filemanager.index');
        Route::post('filemanager/upload', '\Unisharp\Laravelfilemanager\controllers\UploadController@upload')->name('filemanager.upload');

        Route::get('posts/create','PostController@create')->name('posts.create');

        Route::get('settings/website','SettingController@website')->name('website_settings');
        Route::get('settings/server','SettingController@server')->name('server_settings');
        Route::post('settings/website/save','SettingController@website_store');
        Route::post('settings/server/save','SettingController@server_store');
    });

    Route::group(['prefix' => 'account', 'middleware'=>['auth']], function() {
        Route::get('/', 'AccountController@show')->name('accounts.show');
        Route::get('create_character', 'CharacterController@create')->name('characters.create');
        Route::post('create_character', 'CharacterController@store')->name('characters.store');
        Route::get('friends', 'AccountViplistController@show')->name('accounts.viplist.show');
        
        Route::post('generate_rk', 'AccountController@generate_rk')->name('accounts.generate_rk');
        Route::delete('delete_character/{id}', 'CharacterController@destroy')->name('characters.destroy');
        Route::patch('undelete_character/{id}', 'CharacterController@undestroy')->name('characters.undestroy');
    });

    Route::get('/', function () {
        return view('site.blog.index');
    })->name('blog');

    Route::group(['prefix' => 'guilds'], function() {
        Route::get('/', 'GuildController@index')->name('guilds');
        Route::resource('guids', 'AccountController');
    });
});