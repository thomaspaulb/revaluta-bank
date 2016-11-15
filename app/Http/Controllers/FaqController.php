<?php

namespace App\Http\Controllers;

use App\Models\Faq;
use \View;

class FaqController extends \Controller {

    /**
     * Show the profile for the given user.
     */

   public function info() 
{
  $faqs = Faq::query()->get();
  return View::make('info', array('faqs' => $faqs)); 
}
   
}
