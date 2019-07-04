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

    function checkedIt($id, $selected_actors)
    {
        foreach ($selected_actors as $actor) {
            if ($actor->actor_id == $id) {
                return true;
            }
        }
        return false;
    }
    $selected_actors = DB::select('select * from videos_actors where video_id = ?', [1]);
    // $selected_actors=App\VideosActors::where('video_id',1)->get();
    // dd($selected_actors);
    dd(checkedIt(1,$selected_actors));
    // dd(date('Y', strtotime($date)));
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


// SITEMAPS
Route::get('/sitemap.xml', 'SitemapController@index')->name('sitemap.index');
Route::get('/sitemap.xml/actors', 'SitemapController@actors')->name('sitemap.actors');
Route::get('/sitemap.xml/navigation', 'SitemapController@navigation')->name('sitemap.navigation');
Route::get('/sitemap.xml/videos', 'SitemapController@videos')->name('sitemap.videos');
Route::get('/sitemap.xml/years', 'SitemapController@years')->name('sitemap.years');