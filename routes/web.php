<?php
use App\BanglaWordCollection;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
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
	 $comments = DB::table('comments')->simplePaginate (2);
    return view('index', ['comments' => $comments]);
});
Route::get('/pagination/fetch_data','PaginationController@fetch_data');
Route::get('/formula', function () {
    return view('formula');
});
Auth::routes();
Route::group(['middleware' => 'auth'], function () {

	Route::resource('banglaword','BanglaWordCollectionController');
	Route::resource('review','CommentController');
	Route::resource('videocontent','VideoContentController');
	Route::resource('role', 'RoleController');
	Route::resource('user', 'UserController');
	Route::resource('profile', 'ProfileInfoController');
	Route::get('/audioEdit', 'AdminController@audio_edit');
	Route::get('/videoEdit', 'AdminController@video_edit');
	Route::get('/admin', [
		'as' => 'admin.index',
		'middleware'=>'role:superviser',
		'uses' => function () {
			return view('admin.index');
		}
	]);
	Route::get('/adminsearch','AdminController@word_search');
	Route::get ( '/search', function () {
	$q = Input::get ( 'q' );
	if($q != ""){
		$banglaWordCollection = BanglaWordCollection::where ( 'BanglaWord', 'LIKE', '%' . $q . '%' )->paginate (25)->setPath ( '' );
		$pagination = $banglaWordCollection->appends ( array (
			'q' => Input::get ( 'q' )
		) );
		if (count ( $banglaWordCollection ) > 0)
			return view ( 'wordsearchlist' )->withDetails ( $banglaWordCollection )->withQuery ( $q );
	}
	return view ( 'wordsearchlist' )->withMessage ( 'No Details found. Try to search again !' );
} );

});
Route::get('/home', 'HomeController@index')->name('home');
