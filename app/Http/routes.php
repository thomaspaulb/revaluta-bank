<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

use App\Models\Omanote;
use App\Models\Walnote;
use App\Models\Omanotehistoryitem;
use App\Models\Omaproject;
use App\Models\Walnotehistoryitem;

Route::get('', function() {
    $text = DB::table('homepagetexts')->take(1)->get();
    return View::make('index')->with('text', $text);
});

Route::get('info', array('as' => 'pages.faq', 'uses' => 'FaqController@info'));

Route::get('flip', function(){
 return View::make('flipcard');
});

Route::get('shop', function(){
 return View::make('shop');
});

Route::get('email', function(){
 return View::make('email');
});

Route::get('login', function(){
 return View::make('login');
});

Route::get('contact', function(){
 return View::make('contact');
});

Route::get('wal', function(){
  $text = DB::table('walpagetexts')->take(1)->get();
 return View::make('wal')
 ->with('text', $text);
});

Route::get('contact', function(){
 return View::make('contact');
});
Route::get('zte', function(){
$text = DB::table('ztepagetexts')->take(1)->get();
 return View::make('zte')
 ->with('text', $text);
});
Route::get('nulr', function(){
 return View::make('nulr');
});
Route::get('op', function(){
 return View::make('op');
});
Route::get('oma', function(){
  $text = DB::table('omapagetexts')->take(1)->get();
 return View::make('oma')
 ->with('text', $text);
});


/*Route::post('/api/contact', function() {
  //$content = Input::uname;
  $uname = Input::get('uname');
  $email = Input::get('email');
  return $uname;
});*/
Route::resource('api/contact', 'ContactController');
Route::resource('api/wal', 'WalnoteController');
Route::resource('api/oma', 'OmaprojectController');


//****LOGIN ****//
Route::resource('api/login', 'LoginController');
Route::get('api/login', array('uses' => 'LoginController@showLogin'));
Route::post('api/login', array('uses' => 'LoginController@doLogin'));
Route::get('logout', array('uses' => 'LoginController@doLogout'));


Route::post('api/wal/{number}', 'HomeController@Go');
Route::post('api/{number}', array('uses' => 'HomeController@Go_to_page'));
Route::post('api/oma/{number}', array('uses' => 'HomeController@Go_oma'));


Route::get('try2', function(){
  //Blade::setEscapedContentTags('[[', ']]');
  //Blade::setContentTags('[[[', ']]]');
 return View::make('try2');
});


Route::get('wal/{number}', function($number){
  $walnote = Walnote::where('number', '=', $number)->first();
  $historyitem = Walnotehistoryitem::where('walnote_id', '=', $walnote->id)->orderBy('updated_at', 'desc')->get();
  $text = DB::table('walpagetexts')->take(1)->get();
 return View::make('walsingle')
 ->with('walnote', $walnote)
 ->with('historyitem', $historyitem)
 ->with('text', $text);
});

Route::get('oma/{number}', function($number){
  $omanote = Omanote::where('number', '=', $number)->first();
  $historyitem = Omanotehistoryitem::where('omanote_id', '=', $omanote->id)->orderBy('updated_at', 'desc')->get();
  $omanoteowner = Omanotehistoryitem::where('omanote_id', '=', $omanote->id)->orderBy('updated_at', 'desc')->take(1)->get();
  $omanoteprojectowner = Omaproject::where('omanote_id', '=', $omanote->id)->orderBy('updated_at', 'desc')->take(1)->get();
  $text = DB::table('omapagetexts')->take(1)->get();
 return View::make('omasingle')
 ->with('omanote', $omanote)
 ->with('historyitem', $historyitem)
 ->with('omanoteowner', $omanoteowner)
 ->with('omanoteprojectowner', $omanoteprojectowner)
 ->with('text', $text);
});
