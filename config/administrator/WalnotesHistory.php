 <?php


 /**
   * Users model config
   */

 return array(

      'title' => 'Walnotes History',
      'single' => 'Walnote History Item',
      'model' => 'App\Models\Walnotehistoryitem',

      'columns' => array(
          'walnote_id' => array(
              'title' => 'Walnote ID',
          ),
          'nameFrom' => array(
              'title' => 'Walnote From',
          ),
          'nameTo' => array(
              'title' => 'Walnote To',
          ),
          'emailFrom' => array(
              'title' => 'Email From',
          ),
          'emailTo' => array(
              'title' => 'Email To',
          ),
          'message' => array(
              'title' => 'Message',
          ),
      ),

      'edit_fields' => array(
          'walnote_id' => array(
              'title' => 'Walnote ID',
              'type' => 'number',
          ),
          'nameFrom' => array(
              'title' => 'Walnote From',
              'type' => 'text',
          ),
          'nameTo' => array(
              'title' => 'Walnote To',
              'type' => 'text',
          ),
          'emailFrom' => array(
              'title' => 'Email From',
              'type' => 'text',
          ),
          'emailTo' => array(
              'title' => 'Email To',
              'type' => 'text',
          ),
          'message' => array(
              'title' => 'Message',
              'type' => 'text',
          ),
      ),
  );

 
