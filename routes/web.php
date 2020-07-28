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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify' => true]); //verificação de email para criar conta


Route::get('/home', 'HomeController@index')->name('home')->middleware('verified'); //só usuarios com email verificado acessam essa rota


Route::get('foo', function () {
    // Users must confirm their password before continuing...
})->middleware(['auth', 'password.confirm']); //pede confirmação de senha em determinada área

// Route::get('profile', function () {
//     // Only verified users may enter...
// })-;

Route::get('/check',function(){
    return (\Auth::check()) ? 1 : 0;
});
Route::get('/teste', 'IndexController@teste');

#proteger a checkout com login


Route::get('/index', 'IndexController@index');
Route::get('/product/{id}', 'IndexController@show');


Route::get('/cart', 'CartController@index');
Route::get('/getCart', 'CartController@getCart');
Route::post('/cart', 'CartController@addCart');
Route::delete('/cart/{id}', 'CartController@deleteCart');
Route::get('/verifyEmptyCart', 'CartController@verifyEmptyCart');

Route::post('/addUserInfos', 'UserController@addUserInfos');
Route::post('/addUserAddress', 'UserController@addUserAddress');
Route::get('/verifyUsersAddress', 'UserController@verifyUsersAddress');
Route::get('/verifyUsersAddressInfos', 'UserController@verifyUsersAddressInfos');
Route::get('/checkout', 'CartController@checkout')->middleware('auth');


Route::get('/confirmation', 'IndexController@confirmationMessage');


Route::view('/shop', 'store/shop');
Route::view('/contact', 'store/contact');
Route::view('/about', 'store/about');
