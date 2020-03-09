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

use App\Http\Controllers\contentsController;


<<<<<<< HEAD
Route::get('/', function () { 
    return view('welcome');
});


Route::get('landing/', function () {
  return view('landing');
});
// Route::get('/', 'welcome');
Route::get('/contents','contentsController@index');  //controller styles for urls and routes
=======
Route::get('/', function () {
    return view('home');
});
// Route::get('/', 'welcome');
Route::get('/contents','contentsController@index');  //controller styles for urls and routes
Route::get('images','contentsController@images');  
Route::get('videos','contentsController@videos');  
Route::get('texts','contentsController@texts'); 
Route::get('audios','contentsController@audios'); 

Route::post('images','contentsController@images');
Route::post('videos','contentsController@videos');
Route::post('texts','contentsController@texts');
Route::post('audios','contentsController@audios');




    Route::get('laraquiz/home', 'HomeController@laraquizIndex');
    Route::resource('tests', 'TestsController');
    Route::resource('roles', 'RolesController');
    Route::post('roles_mass_destroy', ['uses' => 'RolesController@massDestroy', 'as' => 'roles.mass_destroy']);
    Route::resource('users', 'UsersController');
    Route::post('users_mass_destroy', ['uses' => 'UsersController@massDestroy', 'as' => 'users.mass_destroy']);
    Route::resource('user_actions', 'UserActionsController');
    Route::resource('topics', 'TopicsController');
    Route::post('topics_mass_destroy', ['uses' => 'TopicsController@massDestroy', 'as' => 'topics.mass_destroy']);
    Route::resource('questions', 'QuestionsController');
    Route::post('questions_mass_destroy', ['uses' => 'QuestionsController@massDestroy', 'as' => 'questions.mass_destroy']);
    Route::resource('questions_options', 'QuestionsOptionsController');
    Route::post('questions_options_mass_destroy', ['uses' => 'QuestionsOptionsController@massDestroy', 'as' => 'questions_options.mass_destroy']);
    Route::resource('results', 'ResultsController');
    Route::post('results_mass_destroy', ['uses' => 'ResultsController@massDestroy', 'as' => 'results.mass_destroy']);
use App\Http\Controllers\contentsController;

Route::get('/','contentsController@index');  //controller styles for urls and routes
>>>>>>> 07464c5e14e72ddfc130c28137e8b522e7e7e641
Route::get('images','contentsController@images');  
Route::get('videos','contentsController@videos');  
Route::get('texts','contentsController@texts'); 
Route::get('audios','contentsController@audios'); 

Route::post('images','contentsController@images');
Route::post('videos','contentsController@videos');
Route::post('texts','contentsController@texts');
Route::post('audios','contentsController@audios');




// Route::get('/', function () {
//     return view('contents');             //closure style for urls
// });
<<<<<<< HEAD
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/login', 'Auth\LoginController@authenticate'); 
=======
>>>>>>> 07464c5e14e72ddfc130c28137e8b522e7e7e641
