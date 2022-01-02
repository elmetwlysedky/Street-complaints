<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::group(
    [
        'prefix' =>'admin'  , 'middleware' => 'auth','namespace'=>'Admin'
    ], function() {

        Route::get('/', 'DashboardController@index')->name('Dashboard.home');
        Route::resource('city', 'CityController');
        Route::resource('Problem_Destination', 'Problem_destinationController');
        Route::resource('Reason' , 'ReasonController');
        Route::resource('Problem' , 'ProblemController');
        Route::resource('Attachment', 'Attachment_problemController');
        Route::resource('Comment', 'CommentController');
        Route::resource('Item' , 'ItemController');
        Route::resource('Contact' , 'ContactController');
        Route::resource('Splash' , 'SplashController');
        Route::resource('Terms_and_condition' , 'Terms_and_conditionController');
        Route::resource('Who_are_we' , 'Who_are_weController');
        Route::resource('Social_contact' , 'Social_contactController');
        Route::resource('Blog' , 'BlogController');
        Route::get('Blog/home/{id}', 'BlogController@home')->name('Blog.home');
        Route::get('Problem/home/{id}', 'ProblemController@home')->name('Problem.home');

});

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth'])->name('dashboard');

    require __DIR__ . '/auth.php';

