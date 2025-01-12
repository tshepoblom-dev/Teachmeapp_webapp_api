<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Auth', 'middleware' => ['api.request.type']], function () {

    Route::post('/register/step/{step}', ['as' => 'register', 'uses' => 'RegisterController@stepRegister']);
 //   Route::post('/upload-files', ['uses' => 'RegisterController@registerFilesUpload']);
    Route::post('/login', ['as' => 'login', 'uses' => 'LoginController@login']);

    Route::post('/forget-password', ['as' => 'forgot', 'uses' => 'ForgotPasswordController@sendEmail']);
    Route::post('/reset-password/{token}', ['as' => 'updatePassword', 'uses' => 'ResetPasswordController@updatePassword']);
    Route::post('/verification', ['as' => 'verification', 'uses' => 'VerificationController@confirmCode']);
    Route::get('/google', ['as' => 'google', 'uses' => 'SocialiteController@redirectToGoogle']);
    Route::get('/facebook', ['as' => 'facebook', 'uses' => 'SocialiteController@redirectToFacebook']);
    Route::post('/google/callback', ['as' => 'google_callback', 'uses' => 'SocialiteController@handleGoogleCallback']);
    Route::post('/facebook/callback', ['as' => 'facebook_callback', 'uses' => 'SocialiteController@handleFacebookCallback']);

    Route::get('/reff/{code}', 'ReferralController@referral');

});
//Route::post('/register/step/{step}', ['as' => 'register', 'uses' => 'Auth\RegisterController@stepRegister']);
Route::post('/upload-files/{userId}', ['uses' => 'Auth\RegisterController@registerFilesUpload'])->withoutMiddleware(['api.identify', 'api.auth', 'api.request.type', 'api.guest']);

Route::post('/logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout', 'middleware' => ['api.auth']]);


