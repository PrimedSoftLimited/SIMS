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

/******************** public routes ******************** start*/
// enroll
Route::post('/enroll', 'API\RegistrationController@enroll');
// login
Route::post('/login', 'API\RegistrationController@login');

// forgotten password routes
Route::group([    
    'namespace' => 'API',    
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    // instantiate a forgotten possword mail
    Route::post('create', 'PasswordResetController@create');
    // setting up new user password
    Route::post('reset', 'PasswordResetController@reset');
});
/******************** public routes ******************** end*/

/************ private or authenticated routes ************ start*/
Route::group([    
    'namespace' => 'API',    
    'middleware' => 'auth:api',    
], function () {    
    // view users profile
    Route::get('/user', 'UserController@show');
    // logout route... this route destroys token generated at login
    Route::get('/logout', 'UserController@logout');    
    // update default password
    Route::post('/password', 'UserController@updatePassword');
    // upload profile picture
    Route::post('/upload', 'ImageUploadController@uploadImage');
    // updated profile information
    Route::put('update', 'UpdateProfileController@update');

    // view all questions
    Route::get('questions', 'QuizController@index');
    // view one question
    Route::get('question/{question_id}', 'QuizController@show');
    // a user can attempt quiz
    Route::post('{question_id}/answer', 'QuizController@create');

    // show single options of a poll and their vote count
    // $router->get('/mark', 'MarkController@show'); 
});
/************ private or authenticated routes ************ end*/

Route::post('/pay', 'API\PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'API\PaymentController@handleGatewayCallback'); 