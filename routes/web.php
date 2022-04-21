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
//     return view('welcome');
// });

// Route::get('/name', function(){
//     return "hi khan";
// });

// Route::get('/loss', function(){
//     return "hi md";
// });
// Route and View 
// Route::get('/', function(){
//     return view('HomePage');
// });

// Route::get('/about', function(){
//     return view('AboutPage');
// });

// Route::get('/contact', function(){
//     return view('ContactPage');
// });

// Routing with controller and method
// Route::get('/', 'SiteController@Home');

// Route::get('/about', 'SiteController@About');

// Route::get('/contact', 'SiteController@Contact');
// // single parameter 
// Route::get('/Name/{namevalure}', 'DemoController@MyName');
// // multiple parameter
// Route::get('/FullName/{firstName}/{middleName}/{lastName}', 'DemoController@MyFullName');

Route::group(['prefix'=>'account'], function(){
    Route::get('/login', function(){
        return 'My login';
    });
    Route::get('/signup', function(){
        return 'My signup';
    } );
    Route::get('/profile', function(){
        return 'My profile';
    });
    Route::get('/updateprofile', function(){
        return 'My updateprofile';
    });
});

Route::get('/single', 'Mycontroller');
Route::resource('photos', 'PhotoController');

Route::get('/Myself', 'HomeController@Myself');
Route::get('/Yourself', 'HomeController@Yourself');
