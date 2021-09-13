<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('guest.index');
// }); 
Route::view('/','guest.index');

Route::get('add-to-cart/{id}','App\Http\Controllers\ProductController@AddToCart');
Route::get('shoppingcart','App\Http\Controllers\ProductController@DisplayShoppingCart');
Route::get('reduce/{id}','App\Http\Controllers\ProductController@ReduceByOne');
Route::get('increase/{id}','App\Http\Controllers\ProductController@IncreaseByOne');
Route::get('remove/{id}','App\Http\Controllers\ProductController@RemoveItem');

Route::group(['middleware' => ['auth','verified']], function() { 
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
    Route::view('/profile','profile')->name('profile');
    Route::put('/profile-password','App\Http\Controllers\ProfileController@updatePassword')->name('profile.updatepassword');
    Route::put('/profile-email','App\Http\Controllers\ProfileController@updateEmail')->name('profile.updateemail');
});

Route::group(['prefix' => '/dashboard/user/','middleware' => ['auth','role:user']], function() { 
    Route::view('activate-code','user.activate')->name('dashboard.user-activate-code');
    Route::post('register-car', 'App\Http\Controllers\RegistrationCodeController@store')->name('dashboard.user-activate-code-and-register');

    Route::view('history','user.history')->name('dashboard.user-history');

    Route::view('uploads','user.uploads')->name('dashboard.user-uploads');
    Route::post('uploads', 'App\Http\Controllers\UserController@store')->name('dashboard.user-add-documents');
});

require __DIR__.'/auth.php';
