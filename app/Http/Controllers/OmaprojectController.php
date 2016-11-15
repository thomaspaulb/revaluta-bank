<?php

class OmaprojectController extends Controller {

  /**
   * Display a listing of the resource.
   *
   * @return Response
   */
  public function index()
  {
    // get all the nerds
        //$contacts = Contact::all();

        // load the view and pass the nerds
        //return View::make('contact.create');
            
  }


  /**
   * Show the form for creating a new resource.
   *
   * @return Response
   */
  public function create()
  {
    //return View::make('contact.index');
  }


  /**
   * Store a newly created resource in storage.
   *
   * @return Response
   */
  public function store()
  {
        // validate
        // read more on validation at http://laravel.com/docs/validation
        $rules = array(
            'projectTitle'       => 'required',
            'projectDescription' => 'required',
            'targetAmount'       => 'required',
            'starterName'        => 'required',
            'endDate'            => 'required',
            'starterEmail'       => 'required|email'
            

        );
        $validator = Validator::make(Input::all(), $rules);

        if ($validator->fails()) {
         //return \Response::make('message', 304);
          return Response::json(array(
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()

            ), 400); 
         
        } else {
            // store
            $id = Input::get('omanote_id');
            $date = Input::get('endDate');
            $omaproject            = new Omaproject;
            $omanote               = Omanote::find($id);
            $omanote->omaprojectsession = "1";
            $omaproject->omanote_id = Input::get('omanote_id');
            $omaproject->projectTitle   = Input::get('projectTitle');
            $omaproject->projectDescription     = Input::get('projectDescription');
            $omaproject->targetAmount  = Input::get('targetAmount');
            $omaproject->starterName   = Input::get('starterName');
            $omaproject->starterEmail    = Input::get('starterEmail');
            $omaproject->endDate    = strtotime($date);
            $omaproject->save();
            $omanote->save();
            // redirect
            /*Session::flash('message', 'Message send. Thank you :)');
            return Redirect::to('contact/');*/
            //return \Response::make('It is Successfull', 200);
           

            return Response::json(array(
            'success' => true), 200);
            
           
        }
  }


  /**
   * Display the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function show($id)
  {
    //
  }


  /**
   * Show the form for editing the specified resource.
   *
   * @param  int  $id
   * @return Response
   */
  public function edit($id)
  {
    //
  }


  /**
   * Update the specified resource in storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function update($id)
  {
    //
  }


  /**
   * Remove the specified resource from storage.
   *
   * @param  int  $id
   * @return Response
   */
  public function destroy($id)
  {
    //
  }

  
   
}
