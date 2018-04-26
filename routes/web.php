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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
});

Route::get('lang/{lang}', ['as'=>'lang.switch', 'uses'=>'LanguageController@switchLang']);



Route::get('/nous_contacter', function () {
    return view('nous-contacter');
});


Route::group(['prefix' => 'allemand'], function() {


    Route::get('/', function () {
        return view('allemand');
    });

    Route::get('/cours_particuliers_dallemand', function () {
        return view('/allemand/cours_particuliers_dallemand');
    });

    Route::get('/pour_etudier', function () {
        return view('/allemand/pour_etudier');
    });

    Route::get('/regroupement_familial', function () {
        return view('/allemand/regroupement_familial');
    });

    Route::get('/cours_specialises', function () {
        return view('/allemand/cours_specialises');
    });

});


Route::group(['prefix' => 'informatique'], function() {


    Route::get('/', function () {
        return view('informatique');
    });

    Route::get('/bureautique', function () {
        return view('informatique/bureautique');
    });


});


Route::group(['prefix' => 'anglais'], function() {


    Route::get('/', function () {
        return view('/anglais/anglais');
    });
    
    Route::get('/cours-intensifs', function () {
        return view('anglais/cours-intensifs');
    });



});





Route::post('/messages', 'MessageController@postMessages');


Auth::routes();
Route::get('/messages', 'MessageController@getMessages');


Route::get('/home', 'HomeController@index')->name('home');
