<?php

class WalnoteController extends Controller {

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
            'nameFrom'      => 'required',
            'nameTo'        => 'required',
            'emailFrom'     => 'required|email',
            'message'       => 'required'
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
            $walnotehistoryitem             = new Walnotehistoryitem;
            $walnotehistoryitem->walnote_id = Input::get('walnote_id');
            $walnotehistoryitem->nameFrom   = Input::get('nameFrom');
            $walnotehistoryitem->nameTo     = Input::get('nameTo');
            $walnotehistoryitem->emailFrom  = Input::get('emailFrom');
            $walnotehistoryitem->emailTo    = Input::get('emailTo');
            $walnotehistoryitem->message    = Input::get('message');
            $walnotehistoryitem->save();
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
