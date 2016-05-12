<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

#####################################################################
Route::get('/', ['middleware' => 'guest', function() {
#####################################################################
# Responsds to GET / request.
     return view('index');
}]);

#####################################################################
# Authentication Routes
#####################################################################
Route::post('/login', 'Auth\AuthController@postLogin');
Route::post('/register', 'Auth\AuthController@postRegister');
Route::get('/logout', 'Auth\AuthController@logout');

#####################################################################
# Restricting routes to only authenticated users with Middleware
#####################################################################
Route::group(['middleware' => 'auth'], function() {
   # Route for the user's profile page.
   Route::get('/profile', 'TransactionController@getProfile');

   # Routes for adding a transaction
   Route::get('/add', 'TransactionController@getAdd');
   Route::post('/add', 'TransactionController@postAdd');

   # Routes for editing  a transaction
   Route::get('/edit/{id?}', 'TransactionController@getEdit');
   Route::post('/edit', 'TransactionController@postEdit');

   # Routes for deleting a transaction
   Route::get('/confirm-delete/{id?}', 'TransactionController@getConfirmDelete');
   Route::get('/delete/{id?}', 'TransactionController@getDelete');

   # Routes for searching transactions
   Route::get('/search', 'TransactionController@getSearch');
   Route::post('/search', 'TransactionController@postSearch');
});
