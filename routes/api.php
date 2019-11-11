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
// used for users registration
Route::post('/enroll', 'API\RegistrationController@enroll');
// used for user login
Route::post('/login', 'API\RegistrationController@login');

// forgotten password routes
Route::group([    
    'namespace' => 'API',    
    'middleware' => 'api',    
    'prefix' => 'password'
], function () {    
    // instantiate a forgotten possword mail
    Route::post('create', 'PasswordResetController@create');
    // email link to reset password
    Route::get('find/{token}', 'PasswordResetController@find');
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
    // lets a user update default password... this is supposed to for one time usage
    Route::post('/password', 'UserController@updatePassword');
    // lets a user upload profile picture
    Route::post('/upload', 'ImageUploadController@uploadImage');
    // user can updated profile information
    Route::put('update', 'UpdateProfileController@update');
    
});
/************ private or authenticated routes ************ end*/

Route::post('/pay', 'API\PaymentController@redirectToGateway')->name('pay');
Route::get('/payment/callback', 'API\PaymentController@handleGatewayCallback'); 