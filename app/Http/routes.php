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

Route::get('/show-login-status', function() {

    # You may access the authenticated user via the Auth facade
    $user = Auth::user();

    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }

    return;

});

Route::get('/debug', function() {

    echo '<pre>';

    echo '<h1>Environment</h1>';
    echo App::environment().'</h1>';

    echo '<h1>Debugging?</h1>';
    if(config('app.debug')) echo "Yes"; else echo "No";

    echo '<h1>Database Config</h1>';
    /*
    The following line will output your MySQL credentials.
    Uncomment it only if you're having a hard time connecting to the database and you
    need to confirm your credentials.
    When you're done debugging, comment it back out so you don't accidentally leave it
    running on your live server, making your credentials public.
    */
    //print_r(config('database.connections.mysql'));

    echo '<h1>Test Database Connection</h1>';
    try {
        $results = DB::select('SHOW DATABASES;');
        echo '<strong style="background-color:green; padding:5px;">Connection confirmed</strong>';
        echo "<br><br>Your Databases:<br><br>";
        print_r($results);
    }
    catch (Exception $e) {
        echo '<strong style="background-color:crimson; padding:5px;">Caught exception: ', $e->getMessage(), "</strong>\n";
    }

    echo '</pre>';

});


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
