<?php
    Route::group(['domain' => env('FRONTEND_DOMAIN', 'exchange.test')], function (){
        Route::get('/', 'SiteController@index');
        Route::get('/news', 'SiteController@news');
        Route::get('/news/{news}', 'SiteController@newsById');
        Route::get('/rates', 'SiteController@rates');
        Route::get('/about', 'SiteController@about');
        Route::get('/reviews', 'SiteController@reviews');
        Route::post('/comment', 'SiteController@newComment');
        Route::post('/application', 'SiteController@newApplication');
    });

    Route::group(['domain' => env('BACKEND_DOMAIN', 'admin.exchange.test')], function (){
        Route::get('/', 'Admin\SiteController@index');
        Route::get('/login', 'Admin\SiteController@loginView');
        Route::post('/login', 'Admin\SiteController@login');
        Route::get('/address', 'Admin\SiteController@address');
        Route::get('/users', 'Admin\SiteController@users');
        Route::get('/users/add', 'Admin\SiteController@userAddView');
        Route::post('/users/add', 'Admin\SiteController@userAdd');
        Route::get('/users/delete/{user}', 'Admin\SiteController@deleteUserById');
        Route::get('/users/edit/{user}', 'Admin\SiteController@editUserView');
        Route::post('/users/edit/{user}', 'Admin\SiteController@editUserById');
        Route::get('/comments', 'Admin\SiteController@comments');
        Route::get('/comments/delete/{comment}', 'Admin\SiteController@deleteCommentById');
        Route::get('/news', 'Admin\SiteController@news');
        Route::get('/news/delete/{news}', 'Admin\SiteController@deleteNewsById');
        Route::get('/news/edit/{news}', 'Admin\SiteController@editNewsView');
        Route::post('/news/edit/{news}', 'Admin\SiteController@editNewsById');
        Route::get('/news/add', 'Admin\SiteController@newsAddView');
        Route::post('/news/add', 'Admin\SiteController@newsAdd');
        Route::get('/report/add', 'Admin\SiteController@reportAddView');
        Route::post('/report/add', 'Admin\SiteController@reportAdd');
        Route::get('/report', 'Admin\SiteController@report');
        Route::get('/request', 'Admin\SiteController@request');
        Route::get('/rates', 'Admin\SiteController@rateView');
        Route::post('/rates', 'Admin\SiteController@rate');
    });
?>