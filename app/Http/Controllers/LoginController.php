<?php

namespace App\Http\Controllers;
use \Input;
use \Validator;
use \View;
use \Auth;
use \Response;

class LoginController extends \Controller {

  public function showLogin()
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
      $validator = Validator::make(\Input::all(), $rules);


      // if the validator fails, redirect back to the form
      if ($validator->fails()) {
          ///return Redirect::to('login')
              //->withErrors($validator) // send back all errors to the login form
              //->withInput(Input::except('password')); // send back the input (not the password) so that we can repopulate the form
      return Response::json(array(
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()

            ), 400); 

      } else {

          // create our user data for the authentication
          $userdata = array(
              'email'     => Input::get('email'),
              'password'  => Input::get('password')
          );

          if (!Auth::attempt($userdata)) {
            return Response::json(array(
            'success' => false,
            'failed' => 'Credentials incorrect'

            ), 400);

          }
          // attempt to do the login
          if (Auth::attempt($userdata)) {

            return Response::json(array(
            'success' => true,
            'redirect_url' => 'admin'
            ), 200);

             } else {        

              // validation not successful, send back to form 
              //return Redirect::to('login');
              return Response::json(array(
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()

            ), 400); 
            }

        }

    }

  public function doLogout()
  {
    Auth::logout(); // log the user out of our application
    return Redirect::to('login'); // redirect the user to the login screen
  }
}
