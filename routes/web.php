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

Route::post('/aproveurl', 'Controller@aproveurl');
Auth::routes();
//front
Route::get('/', 'Front\MainController@index')->name('index');
Route::get('/about', 'Front\MainController@about')->name('about');
Route::get('/courses', 'Front\MainController@courses')->name('courses');
Route::get('/articles', 'Front\MainController@article')->name('articles');
Route::get('/articles/{slug}', 'Front\MainController@articleSingle')->name('article.single');
Route::get('/contact', 'Front\MainController@contact')->name('contact');
Route::post('/contact/post', 'Front\MainController@contactPost')->name('contact.post');

//back
Route::get('/home', 'AdminController@index')->name('home');
Route::get('/admin/networks', 'AdminController@get_networks');
Route::get('/admin/add_network', 'AdminController@add_network');
Route::post('/admin/submit_network', 'AdminController@submit_network');

Route::get('/admin/branches', 'AdminController@get_branches');
Route::get('/admin/add_branch', 'AdminController@add_branch');
Route::post('/admin/submit_branch', 'AdminController@submit_branch');

Route::get('/admin/clients', 'AdminController@get_clients');
Route::get('/admin/add_client', 'AdminController@add_client');
Route::post('/admin/submit_client', 'AdminController@submit_client');

Route::get('/admin/orders', 'AdminController@get_orders');
Route::get('/admin/add_order', 'AdminController@add_order');
Route::post('/admin/submit_order', 'AdminController@submit_order');





Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('about', 'AdminController@AboutUs')->name('about');
    Route::post('about/update', 'AdminController@AboutUpdate')->name('about.update');
    Route::get('courses', 'AdminController@Courses')->name('courses');
    Route::get('course/create', 'AdminController@CourseCreate')->name('course.create');
    Route::post('course/store', 'AdminController@CourseStore')->name('course.store');
    Route::get('course/switch', 'AdminController@CourseSwitch')->name('course.switch');
    Route::get('course/{id}/edit', 'AdminController@CourseEdit')->name('course.edit');
    Route::post('course/{id}/update', 'AdminController@CourseUpdate')->name('course.update');
    Route::post('course/destroy', 'AdminController@CourseDestroy')->name('course.destroy');
    Route::post('images/store', 'AdminController@ImagesStore')->name('images.store');
    Route::get('images/destroy/{id}', 'AdminController@ImageDestroy')->name('image.destroy');
    Route::get('contacts', 'AdminController@Contacts')->name('contacts');
    Route::post('contact/destroy', 'AdminController@ContactDestroy')->name('contact.destroy');
    Route::get('articles', 'AdminController@Articles')->name('articles');
    Route::get('article/switch', 'AdminController@ArticleSwitch')->name('article.switch');
    Route::get('article/create', 'AdminController@ArticleCreate')->name('article.create');
    Route::post('article/store', 'AdminController@ArticleStore')->name('article.store');
    Route::get('article/{id}/edit', 'AdminController@ArticleEdit')->name('article.edit');
    Route::post('article/{id}/update', 'AdminController@ArticleUpdate')->name('article.update');
    Route::post('article/destroy', 'AdminController@ArticleDestroy')->name('article.destroy');
});
