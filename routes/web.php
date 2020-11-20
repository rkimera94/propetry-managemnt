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




//  my routes 

//import and download excel files from the system 
Route::get('/importdata','DataController@importfile');
Route::post('/importdata','DataController@importdata');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


/**
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * 
 * DATA PORTAL Project 
*/

// Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// my project
Route::get('/dataportal','SystemController@dashboard');
Route::get('/dataportal/categories','CategoriesController@index')->name('list_category');
Route::get('/dataportal/categories/detail/{id}','CategoriesController@detail')->name('detail_service');


// using resource
Route::resource('/dataportal/category','CategoryController');
Route::resource('/admin/dataportal/category','Admin\CategoryController', ['as'=> 'admin']);

Route::get('/create','Admin\CategoryController@create');
Route::post('/create','Admin\CategoryController@store');

// Tutorial 2
Route::get('/insert2','SystemController@insertdata2');
Route::get('/insert1','SystemController@insertdata1');
Route::get('/tab','SystemController@tab');
Route::get('/tab1','SystemController@tab1');






// Property Routes
/***
 * education routes and dashboards
 */

Route::resource('/admin/dataportal/property','Admin\PropertyController', ['as'=> 'edu']);
//Route::get('/admin/dataportal/property/attributes',[PropertyAttributeController::class, 'index']);
Route::get('/admin/dataportal/property-attributes','Admin\PropertyAttributeController@index')->name('propertyAttribute');


//Route::get('/edu','Admin\EducationController@index');
Route::get('edu/education/tab_visualization','SystemController@tab1');


Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function () {
    Route::resource('users', 'AdminController');
});

// News ..... routes 
Route::resource('/admin/dataportal/news','Admin\NewsController', ['as'=> 'admin']); 


/**
 * roles 
 * middleware routes
 */


Route::get('/superadmin',['middleware'=> ['role','auth'],function(){

}]);


Route::get('/getuser', function(){
    $user = Auth::user();
    if($user->IsAdmin()){
        echo 'My admin';
    }

});












/***
 * 
 *  Laravel php tutorial2 
 * 
 * login and register system 
 * authentication system
 * 
 * 
 * 
 * 
 * 
 * testing
 */

 Route::get('/register','Security\RegisterController@register');
 Route::post('/register','Security\RegisterController@registeruser');

 //Route::get('/login','Security\LoginController@login');

 /**
  * php tutorial 2
  * 
  
  * tutorail sign in 
  */

 Route::get('/register2','Security\RegisterController@register2');
 Route::post('/register2','Security\RegisterController@registeruser2');


 Route::get('/template',function(){
     return view('security.template');

 });

 // login  system dev


 Route::get('/login2','Security\LoginController@login2');
 Route::post('/login_to_sys','Security\LoginController@postlogin');
 Route::get('/dashboard','CategoryController@index');
 
//logout method

//  Route::post('/logout','Security\LoginController@logout');
 //Route::get('/logout','Security\LoginController@postlogout');

 // the roles and permissions
 Route::get('/reports','Reports\ReportsController@reports')->middleware('admin');












































/**
 * 
 * homecontroller routes
 */
Route::get('/sysdata','HomeController@upload');
Route::post('/sysdata','HomeController@upload_data');





// ->name() an alias of the route 



/**
 * 
 * loading the admin portal 
 * 
 * trying  first routes 
 *  */ 
//Route::get('/admin','HomeController@index');
//Route::get('/test','HomeController@testportal');
//Route::get('/contact','HomeController@contact');

Route::get('/admin','TestController@testindex');

Route::get('/admin2','TestController@testdashboard');


/**
 * 
 * 
 * 
 * building dashboards ad data system portals
 */



 // routes 
 Route::get('/portal','TestController@dataportal');
 Route::get('/test','TestController@test')->name('test');










/**
 * 
 * rkimera@ymail.com
 * 123@Ronald
 */