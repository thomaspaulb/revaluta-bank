 <?php


 /**
   * Walnotes model config
   */

 return array(

      'title' => 'Walnotes',
      'single' => 'walnote',
      'model' => 'App\Models\Walnote',

      'columns' => array(
          'number' => array(
              'title' => 'Worthalot Number',
          ),
      ),

      'edit_fields' => array(
          'number' => array(
              'title' => 'Worthalot Number',
              'type'  => 'number',
          ),
          
      ),
  );

 
