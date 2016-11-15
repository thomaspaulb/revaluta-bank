<?php

namespace App\Http\Controllers;
use View;
use Input;
use Response;
use DB;

class HomeController extends \Controller {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	/*public function showLogin()
	{
    // show the form
    return View::make('login');
	}

	public function doLogin()
	{
	// process the form
		// validate the info, create rules for the inputs
			$rules = array(
			    'email'    => 'required|email', // make sure the email is an actual email
			    'password' => 'required|alphaNum|min:3' // password can only be alphanumeric and has to be greater than 3 characters
			);

			// run the validation rules on the inputs from the form
			$validator = Validator::make(Input::all(), $rules);

			// if the validator fails, redirect back to the form
			if ($validator->fails()) {
			    return Redirect::to('login')
			        ->withErrors($validator) // send back all errors to the login form
			        ->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
			
			} else {

			    // create our user data for the authentication
			    $userdata = array(
			        'email'     => Input::get('email'),
			        'password'  => Input::get('password')
			    );

			    //if (!Auth::attempt(($userdata)) {
			    	//console.log('loginffailed');
			    	//return Redirect::to('login')
			       // ->withErrors('Credentials incorrect') // send back all errors to the login form

      		//return Response::error('Credentials incorrect');
    			
    			//} elseif (Auth::attempt($userdata)) {

			    // attempt to do the login
			    if (Auth::attempt($userdata)) {

			        // validation successful!
			        // redirect them to the secure section or whatever
			        // return Redirect::to('secure');
			        // for now we'll just echo success (even though echoing in a controller is bad)
			        //echo 'SUCCESS!';

			    	return Redirect::to('/admin');

							
			    } else {        

			        // validation not successful, send back to form 
			        return Redirect::to('login');

			    }

				}

		}*/

		/*public function doLogout()
		{
			Auth::logout(); // log the user out of our application
	    return Redirect::to('index'); // redirect the user to the login screen
	  } */


	  public function Go_old()
		{
						
					$walnotdata = Input::get('number');

					$walnote = DB::table('walnotes')->where('number', $walnotdata)->first();

					if ($walnote == '') {

						return Response::json(array(
            'success' => false,
            'empty' => 'Not available yet!'
						), 400); 

            }else{
            		
            $walnotenumber = $walnote->number;

            }

				
          if ($walnotdata == $walnotenumber) {

            return Response::json(array(
            'success' => true,
						'redirect_url' => "/wal/$walnotenumber"

            ), 200);

             } else {        

              return Response::json(array(
            'success' => false,

            'errors' => 'Not available yet!'

            ), 400); 
            }


	  }


     public function Go_to_page()
    {
            
      $number = Input::get('number');

      if ($number == '') {
         return Response::json(array(
            'success' => false,
            'empty' => 'Field Empty!'
            ), 400);

      }else{

          if ($number > 299999 && $number < 400000 ) {

              $notenumber = DB::table('walnotes')->where('number', $number)->first();

              if ($notenumber == '') {

                return Response::json(array(
                'success' => false,
                'empty' => 'WAL Not available yet!'
                ), 400); 

              }else{
                    
                $note = $notenumber->number;

              }
            
              if ($number == $note) {

                return Response::json(array(
                'success' => true,
                'redirect_url' => "/wal/$note"

                ), 200);

              } else {        

                  return Response::json(array(
                'success' => false,

                'errors' => 'WAL Not available yet!'

                ), 400); 
              }

      } elseif ($number > 399999 && $number < 500000 ) {       

              $notenumber = DB::table('omanotes')->where('number', $number)->first();

              if ($notenumber == '') {

                return Response::json(array(
                'success' => false,
                'empty' => 'OMA Not available yet!'
                ), 400); 

              }else{
                    
                $note = $notenumber->number;

              }

              if ($number == $note) {

                return Response::json(array(
                'success' => true,
                'redirect_url' => "/oma/$note"

                ), 200);

              } else {        

                  return Response::json(array(
                'success' => false,

                'errors' => 'OMA Not available yet!'

                ), 400); 
              }

     } else {

            return Response::json(array(
            'success' => false,

            'empty' => 'Not available yet!'

            ), 400); 
          
     }
   }
  }
}
