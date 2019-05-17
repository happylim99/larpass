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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('email/verify/{id}', 'VerificationApiController@verify')->name('verificationapi.verify');

Route::get('email/resend', 'VerificationApiController@resend')->name('verificationapi.resend');

Route::group([
    'prefix' => 'auth'
], function () {
Route::post('login', 'UsersApiController@login');
Route::post('signup', 'UsersApiController@register');

Route::group(['middleware' => 'auth:api'], function(){
    Route::get('logout', 'AuthController@logout');
    //Route::post('details', 'UsersApiController@details')->middleware('verified');
    Route::post('details', 'UsersApiController@details');
}); // will work only when user has verified the email
});

/*
Route::group([
    'prefix' => 'productmaster',
    'middleware' => [
        'auth:api'
        ],
    ],  function () {
        Route::apiResource('/products','Api\ProductMastersController');
        Route::apiResource('/{product}/productreviews', 'Api\ProductReviewsController');
    });
*/

Route::group([
    'prefix' => 'productmaster',
    ],  function () {
        Route::apiResource('/products','Api\ProductMastersController');
        Route::apiResource('/{product}/productreviews', 'Api\ProductReviewsController');
    }
);

Route::group([
    'prefix' => 'shop',
    ],  function () {
        Route::apiResource('/shops','Api\ShopsController');
    }
);


/*
Route::group([
            'prefix'     => 'admin',
            'middleware' => [
                'auth',
                'anotherMiddleware',
                'yetAnotherMiddleware',
            ],
        ], function() {
            
           Route::get('dashboard', function() {} );
 });
 */

/*
Route::group([
    'prefix' => 'auth'
], function () {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
  
    Route::group([
      'middleware' => 'auth:api'
    ], function() {
        Route::get('logout', 'AuthController@logout');
        Route::get('user', 'AuthController@user');
    });
});
*/
