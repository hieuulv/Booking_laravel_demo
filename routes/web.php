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


Auth::routes();
//Check Admin
Route::get('/admin', 'HomeController@admin')->middleware('CheckAdmin')->name('admin');

Route::get('/', 'HomeController@index')->name('index');

Route::get('/about', 'HomeController@about')->name('about');

Route::get('/rooms', 'HomeController@rooms')->name('rooms');

Route::get('/rooms/booking/{id}', 'HomeController@booking')->name('booking');

Route::post('booking_room', 'BookingController@member_booking')->name('member_booking');

Route::get('/rooms/detail/{id}', 'HomeController@detail_rooms')->name('detail');

Route::post('/comment_notlogin', 'CommentController@comment_not_logged')->name('comment_notlogin');

Route::post('/comment_login', 'CommentController@comment_login')->name('comment_login');

Route::get('/post', 'HomeController@post')->name('post');

Route::get('/contact', 'HomeController@contact')->name('contact');

Route::post('/contact', 'ContactController@contact_admin')->name('contact_admin');

Route::get('/profile/{id}', 'ProfileController@profile')->name('profile');

Route::post('/update_profile', 'ProfileController@update_profile')->name('update_profile');

Route::get('/myroom', 'HomeController@myroom')->name('myroom');

Route::get('/search', 'HomeController@search')->name('search');





//--------------------------------------------------------------ADMIN--------------------------------------------------------------


//----------------------------------------------------------------------------------------------
// Route index Category Admin
Route::get('admin/category', 'CategoryController@index_category')->name('index_category');

// Add Category
Route::get('admin/category/create', 'CategoryController@create')->name('create_category');
Route::post('admin/category/create', 'CategoryController@add')->name('add_category');

// Edit Category
Route::get('admin/category/update/{id}', 'CategoryController@update')->name('update_category');
Route::post('admin/category/update/{id}', 'CategoryController@edit')->name('edit_category');

// Remove Category
Route::get('admin/category/remove/{id}', 'CategoryController@remove')->name('remove_category');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Rooms Admin
Route::get('admin/rooms', 'RoomsController@index_rooms')->name('index_rooms');

// Add rooms
Route::get('admin/rooms/create', 'RoomsController@create')->name('create_rooms');
Route::post('admin/rooms/create', 'RoomsController@add')->name('add_rooms');

// Edit rooms
Route::get('admin/rooms/update/{id}', 'RoomsController@update')->name('update_rooms');
Route::post('admin/rooms/update/{id}', 'RoomsController@edit')->name('edit_rooms');

// Remove Category
Route::get('admin/rooms/remove/{id}', 'RoomsController@remove')->name('remove_rooms');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Comment Admin
Route::get('admin/comment', 'CommentController@index_comment')->name('index_comment');

// Remove Comment
Route::get('admin/comment/remove/{id}', 'CommentController@remove')->name('remove_comment');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index booking Admin
Route::get('admin/booking', 'BookingController@index_booking')->name('index_booking');
// Route status booking
Route::get('admin/booking/status/{id}', 'BookingController@status_booking')->name('status_booking');
Route::post('admin/booking/status/{id}', 'BookingController@status_booking_save')->name('status_booking_save');


//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Setting Admin
Route::get('admin/setting', 'SettingController@index_setting')->name('index_setting');

// Route edit Setting Admin
Route::get('admin/setting/edit/{id}', 'SettingController@update')->name('update_setting');
Route::post('admin/setting/edit/{id}', 'SettingController@edit')->name('edit_setting');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route index Comment Admin
Route::get('admin/user', 'UserController@index_user')->name('index_user');

//Route add user
Route::get('admin/user/add', 'UserController@create')->name('create_user');
Route::post('admin/user/add', 'UserController@add')->name('add_user');

//Route edit user
Route::get('admin/user/edit/{id}', 'UserController@update')->name('update_user');
Route::post('admin/user/edit/{id}', 'UserController@edit')->name('edit_user');

// Remove Comment
Route::get('admin/user/remove/{id}', 'UserController@remove')->name('remove_user');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route Contact Admin
Route::get('admin/contact', 'ContactController@index_contact')->name('index_contact');

// Remove Contact Admin
Route::get('admin/contact/remove/{id}', 'ContactController@remove')->name('remove_contact');
//----------------------------------------------------------------------------------------------

//----------------------------------------------------------------------------------------------
// Route Index Slide Home
Route::get('admin/slide_home', 'SlideHomeController@index_slide_home')->name('slide_home');

// Route edit Slide Home
Route::get('admin/slide_home/edit/{id}', 'SlideHomeController@update')->name('update_slide_home');
Route::post('admin/slide_home/edit/{id}', 'SlideHomeController@edit')->name('edit_slide_home');

// Route Slide Subpage
Route::get('admin/slide_subpage', 'SlideSubpageController@index_slide_subpage')->name('slide_subpage');

// Route edit Slide Subpage
Route::get('admin/slide_subpage/edit/{id}', 'SlideSubpageController@update')->name('update_slide_subpage');
Route::post('admin/slide_subpage/edit/{id}', 'SlideSubpageController@edit')->name('edit_slide_subpage');

//----------------------------------------------------------------------------------------------

//--------------------------------------------------------------END ADMIN--------------------------------------------------------------
