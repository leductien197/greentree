<?php

use Illuminate\Routing\RouteGroup;
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
// ___________________________________back end__________________________
// admin
Route::group(['prefix' => 'admin'], function () {
    Route::get('', 'backend\IndexController@getIndex')->middleware('auth');
    Route::get('logout', 'backend\IndexController@Logout');

    //benh cay
    Route::group(['prefix' => 'plantdisease'], function () {
        Route::get('', 'backend\PlantDiseaseController@getPlantDisease');
        Route::get('add', 'backend\PlantDiseaseController@addPlantDisease');
        Route::post('add', 'backend\PlantDiseaseController@postaddPlantDisease');
        Route::get('edit/{id}', 'backend\PlantDiseaseController@editPlantDisease');
        Route::post('edit/{id}', 'backend\PlantDiseaseController@postEditPlantDisease');
        Route::get('del/{id}', 'backend\PlantDiseaseController@delPlantdisease');
    });

    //caay
    Route::group(['prefix' => 'tree'], function () {
        Route::get('', 'backend\TreeController@getTree');
        Route::get('add', 'backend\TreeController@getAddTree');
        Route::post('add', 'backend\TreeController@postAddTree');
        Route::get('edit/{id}', 'backend\TreeController@getEditTree');
        Route::post('edit/{id}', 'backend\TreeController@postEditTree');
        Route::get('del/{id}', 'backend\TreeController@delTree');
        // Route::get('', 'backend\TreeController@backToListTree');
    });

    //bai viet
    Route::group(['prefix' => 'news'], function () {
        Route::get('', 'backend\NewsController@getNews');
        Route::get('add', 'backend\NewsController@addNews');
        Route::post('add', 'backend\NewsController@postAddNew');
        Route::get('edit/{id}', 'backend\NewsController@getEditNew');
        Route::post('edit/{id}', 'backend\NewsController@postEditNew');
        Route::get('del/{id}', 'backend\NewsController@delNew');
    });

    // comment
    Route::group(['prefix' => 'comment'], function () {
        Route::get('', 'backend\CommentController@getComment');
        Route::get('edit', 'backend\CommentController@editComment');
    });
});


Route::get('/logout', 'backend\IndexController@logOut');



// _______________front end_____________

Route::get('', 'frontend\IndexController@getIndex');
Route::get('detail/{id}', 'frontend\NewController@getDetail');
Route::get('new', 'frontend\NewController@getAllNew');
Route::get('newAll', 'frontend\NewController@getNewAll');
// Route::get('new', 'frontend\NewController@getAllRice');
Route::get('contact', 'frontend\IndexController@getContact');
Route::get('about', 'frontend\IndexController@getAbout');
Route::get('search', 'frontend\SearchController@getSearch');
Route::get('autocomplete', 'frontend\SearchController@autocomplete')->name('autocomplete');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// full text search
Route::get('full-text-search', 'Full_text_search_Controller@index');

Route::post('full-text-search/action', 'Full_text_search_Controller@action')->name('full-text-search.action');
// bai viet
