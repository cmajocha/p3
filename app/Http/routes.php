<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// get, post, put, delete
Route::get('/', function () {
    return view('home');
});

Route::controller('/lorem','LoremController');
Route::controller('/users','UserController');

Route::get('/practice', function() {
  Debugbar::error('Error!');
  Debugbar::warning('Watch out…');
  Debugbar::addMessage('Another message', 'mylabel');

  return 'Practice';
});
