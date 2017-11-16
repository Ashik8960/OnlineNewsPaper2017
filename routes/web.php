<?php

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
//404 not found






Route::get('/','HomeController@showHome');
Route::get('/home','HomeController@showBlogData');
Route::get('/about','HomeController@showAbout');
Route::get('/contact','HomeController@showContact');
Route::post('/contact','HomeController@showContact');
Route::get('/delete/{id}','HomeController@contactDelete');
Route::get('/edit/{id}','HomeController@contactEdit');
Route::post('/edit','HomeController@contactUpdate');
Route::get('/signup','UserController@showSignup');

Route::get('/signupA','UserController@showSignupA');


Route::post('/signup','UserController@signup');
Route::get('/signupDelete/{id}','UserController@signupDelete');
Route::get('/signupEdit/{id}','UserController@signupEdit');
Route::post('/signupUpdate/{id}','UserController@signupUpdate');
Route::get('/mail','HomeController@showMail');
Route::post('/mail','HomeController@postMail');



Route::get('/login','UserController@getLogin');
Route::post('/login','UserController@processtLogin');

Route::get('/logout','UserController@processtLogout');
Route::post('/logout','UserController@processtLogout');

//blog

Route::get('/blog','HomeController@showBlog');
Route::post('/blog','HomeController@processBlog');
Route::get('/blogDelete/{id}','HomeController@deleteBlog');
Route::get('/blogEdit/{id}','HomeController@editBlog');
Route::post('/blogUpdate/{id}','HomeController@updateBlog');

Route::get('/blogDetiles/{id}','HomeController@processBlogDetiles');
Route::get('/adminBlogDetiles/{id}','HomeController@adminBlogDetiles');



//category

Route::get('/category','CategoryController@showCategory');
Route::post('/category','CategoryController@createCategory');
Route::get('/categoryDelete/{id}','CategoryController@deleteCategory');
Route::get('/categoryUpdate/{id}','CategoryController@updateCategory');
Route::post('/categoryEdit/{id}','CategoryController@editCategory');
Route::get('/aCategoryD/{id}','CategoryController@adminCategoryDetiles');


//searching

Route::get('/search','CategoryController@serchingShow');


//pages

Route::get('/','CategoryController@national');
Route::get('/politics','CategoryController@politics');
Route::get('/sports','CategoryController@sports');
Route::get('/economics','CategoryController@economics');
Route::get('/international','CategoryController@international');
Route::get('/editors','CategoryController@editors');
Route::get('/entertainment','CategoryController@entertainment');
Route::get('/educations','CategoryController@educations');
Route::get('/features','CategoryController@features');
Route::get('/others','CategoryController@others');

//categoryDetiles
Route::get('/categoryD/{id}','CategoryController@categoryDetiles');



//adminpanel

Route::get('/categorypost','CategoryController@commntest');
Route::get('/blogpost','CategoryController@commntestB');
Route::get('/admin','CategoryController@commntestC');
Route::get('/profile','CategoryController@commntestD');
Route::get('/dashboard','CategoryController@commntestE');
Route::get('/addadmin','CategoryController@commntestF');




