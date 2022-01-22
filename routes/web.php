<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function () {
    return view('welcome');
});


Route::group(
    [
        'prefix' =>'admin'  , 'middleware' => 'auth' , 'namespace' => 'Admin'
    ], function() {

        Route::get('/', 'DashboardController@index')->name('Dashboard.home');
        Route::resource('city', 'CityController');
        Route::resource('Problem_Destination', 'Problem_destinationController');
        Route::resource('Reason' , 'ReasonController');

        ############################### Route problem ###############################
//        Route::resource('Problem' , 'ProblemController');
        Route::get('Problem', 'ProblemController@index')->name('Problem.index');
        Route::get('Problem/create', 'ProblemController@create')->name('Problem.create');
        Route::post('Problem/store', 'ProblemController@store')->name('Problem.store');
        Route::get('Problem/edit/{id}', 'ProblemController@edit')->name('Problem.edit');
        Route::get('Problem/show/{id}', 'ProblemController@show')->name('Problem.show');
        Route::patch('Problem/update/{id}', 'ProblemController@update')->name('Problem.update');
        Route::delete('Problem/delete/{id}', 'ProblemController@destroy')->name('Problem.destroy');


        Route::get('Problem/home/{id}', 'Status_problemController@home')->name('Problem.home');
        Route::put('Problem/status/{id}', 'Status_problemController@status')->name('Problem.status');
        Route::get('Problem/new', 'Status_problemController@new')->name('Problem.new');
        Route::get('Problem/under_review', 'Status_problemController@under_review')->name('Problem.under_review');
        Route::get('Problem/previewed', 'Status_problemController@previewed')->name('Problem.previewed');
        Route::get('Problem/closed', 'Status_problemController@closed')->name('Problem.closed');

    ################################ end route problem ##############################

        Route::resource('Comment', 'CommentController');
        Route::resource('Item' , 'ItemController');
        Route::resource('Contact' , 'ContactController');
        Route::resource('Splash' , 'SplashController');
        Route::resource('Terms_and_condition' , 'Terms_and_conditionController');
        Route::resource('Who_are_we' , 'Who_are_weController');
        Route::resource('Social_contact' , 'Social_contactController');
        Route::resource('Blog' , 'BlogController');
        Route::get('Blog/home/{id}', 'BlogController@home')->name('Blog.home');
        Route::resource('Comment', 'CommentController');
        Route::resource('Reply' , 'ReplyController');
        Route::resource('Blog_comment' , 'Blog_commentController');
        Route::resource('Rate' , 'Rate_problemController');
        Route::resource('Profile' , 'ProfileController');


});

//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->middleware(['auth'])->name('dashboard');






require __DIR__ . '/auth.php';
