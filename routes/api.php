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
    Route::put('/update', 'UpdateProfileController@update');
    
    // view all exams
    Route::get('exam', 'ExamsController@index');
    // view one exam and its quesitons
    Route::get('exam/{exam_id}', 'ExamsController@show');
    // view questions individually
    Route::get('exam/{examId}/{questionId}', 'ExamsController@viewOne');
    // a user can attempt quiz
    Route::post('{examId}/{questionId}/{optionId}/answer', 'ExamsController@create');
    
    //result
    Route::get('{examId}/result', 'ResultController@index');

    //Make Payment
    Route::post('/pay', 'RaveController@initialize')->name('pay');
    Route::post('/rave/callback', 'RaveController@callback')->name('callback');

    // view all users
    Route::get('/admin/users', 'AdminController@index');

    // view all users who have paid
    Route::get('/admin/payment', 'AdminController@payment');

    // show single options of a poll and their vote count
    // $router->get('/mark', 'MarkController@show'); 
});
/************ private or authenticated routes ************ end*/