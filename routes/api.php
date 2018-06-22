<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => 'responseBodyProcess'], function () {

    /**
     * 登录
     */
    Route::post('/v1.0/system/login', 'ExampleLoginController.php@exampleLogin');

    /**
     * 使用默认token配置
     */
    Route::group(['middleware' => ['token']], function () {
        Route::post('/v1.0/system/logout', 'ExampleLoginController.php@exampleLogout');
    });

    /**
     * 使用自定义token配置
     */
    Route::group(['middleware' => ['token:web']], function () {
        Route::post('/v1.1/system/logout', 'ExampleLoginController.php@exampleLogout');
    });

});
