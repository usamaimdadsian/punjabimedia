<?php

use Illuminate\Support\Facades\Auth;

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

Route::get('mail/test', function () {
});

Route::get('/', 'MainpageController@index')->name('main.index');

Route::get('/contact', function () {
    return view('contact');
})->name('main.contact');

Route::get('drama/{name}/{video}', 'MainpageController@single')->name('main.single');
Route::get('search/{name}/{value}', 'MainpageController@specified')->name('main.specified');
Route::get('/atoz', 'MainpageController@atoz')->name('main.atoz');

Auth::routes();

Route::post('video/ratings/ajax', 'RatingController@ratingUpdateAjax')->name('video.rating.ajax');
Route::post('video/comments/ajax', 'CommentController@addCommentAjax')->name('video.comment.ajax');
Route::post('drama/search/ajax', 'MainpageController@searchAjax')->name('drama.search.ajax');
Route::post('email/user/subscriber/ajax', 'EmailController@storeEmailAjax')->name('email.user.ajax');

Route::get('email/create', 'EmailController@create')->name('email.create');
Route::post('email', 'EmailController@store')->name('email.store');

Route::resource('video', 'VideoController');
Route::resource('actor', 'ActorController');