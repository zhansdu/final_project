<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/chat/send-message', 'Chat\ChatController@send');
Route::post('/chat/connect', 'Chat\ChatController@connect');

// faq

Route::post('/faq/create', 'Faq\FaqController@create');
Route::post('/faq/update', 'Faq\FaqController@update');
Route::post('/faq/search', 'Faq\FaqController@search');

Route::get('/faq/index', 'Faq\FaqController@index');
Route::get('/faq/read', 'Faq\FaqController@read');
Route::get('/faq/delete', 'Faq\FaqController@delete');

// events

Route::post('/events/create', 'Events\EventsController@create');
Route::post('/events/update', 'Events\EventsController@update');
Route::post('/events/search', 'Events\EventsController@search');

Route::get('/events/index', 'Events\EventsController@index');
Route::get('/events/read', 'Events\EventsController@read');
Route::get('/events/delete', 'Events\EventsController@delete');

// questions

Route::post('/questions/create', 'Questions\QuestionsController@create');
Route::post('/questions/update', 'Questions\QuestionsController@update');
Route::post('/questions/search', 'Questions\QuestionsController@search');

Route::get('/questions/index', 'Questions\QuestionsController@index');
Route::get('/questions/read', 'Questions\QuestionsController@read');
Route::get('/questions/delete', 'Questions\QuestionsController@delete');