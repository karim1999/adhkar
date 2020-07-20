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

/*Route::get('/', function () {
    return view('welcome');
});
*/
/*Auth::routes();*/

Route::get('/', function(){
	$azkar=\App\Azkar::where('category_id',1)->get();
	return view('index',compact('azkar'), ["is_home"=> true]);
})->name('home');
Route::get('/cat/{category}','DataController@index')->name('category');
Route::get('/update_mode', 'ApiController@update_dark_mode_session');
