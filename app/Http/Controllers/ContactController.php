<?php

class ContactController extends Controller {

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
        return View::make('contact.create');
            
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('contact.index');
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
            'email'       => 'required|email',
            'telephone'   => 'required|numeric|min:8',
            'question' 		=> 'required'
        );
        $validator = Validator::make(Input::all(), $rules);



        // Validate the input and return correct response
        // process the login
        if ($validator->fails()) {
         //return \Response::make('message', 304);
          return Response::json(array(
            'success' => false,
            'errors' => $validator->getMessageBag()->toArray()

            ), 400); 
         

    // 400 being the HTTP code for an invalid request.
          /*  return Redirect::to('contact/')
                ->withErrors($validator)
                ->withInput(Input::except('password')); */
        } else {
            // store
            $contact = new Contact;
            $contact->email      = Input::get('email');
            $contact->telephone  = Input::get('telephone');
            $contact->question   = Input::get('question');
            $contact->save();
            $contact->email();
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

  
    function email($receiver,$subject,$message,$member_name,$member_email) {
      $system_name = "Ondernemingbeheer";
      $system_email = "noreply@ondernemingbeheer.nl";
//e-mail inhoud
      $message_html = "<html><head></head><body>";
      $message_html .= "".$message."";
      $message_html .= "</body></html>";
//set up the mail
      $to = "".$receiver."";
      $subject = "".$subject."";
      //$headers  = "MIME-Version: 1.0\n";
      //$headers .= "Content-type: text/html; charset=iso-8859-1\n";
      //$headers .= "From: ".$member_name." <".$member_email.">\n";   

//send the mail
      //mail($to, $subject, $msg, $headers);
      $transport = Swift_SendmailTransport::newInstance('/usr/sbin/sendmail -t -i');
      $mailer = Swift_Mailer::newInstance($transport);
      $msg = Swift_Message::newInstance();
      $msg->setSubject($subject);
      $msg->setBody($message, 'text/html');
      $msg->setFrom(array($system_email => $member_name));
      $msg->setReplyTo(array($member_email => $member_name));
      $msg->setTo(array($to));
      //$msg->setCc(array("antiflu@gmail.com"));
      //$msg->setBcc(array("antiflu@gmail.com"));
      $mailer->send($msg);
      //if ($mailer->send($msg)) { echo "success"; } else { ech
    }
}
