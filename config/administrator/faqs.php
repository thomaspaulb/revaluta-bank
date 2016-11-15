 <?php


 /**
   * FAQs model config
   */

 return array(

      'title' => 'FAQs',
      'single' => 'faq',
      'model' => 'App\Models\Faq',

      'columns' => array(
          'question' => array(
              'title' => 'Question',
          ),
          'answer' => array(
              'title' => 'Answer',
          ),
      ),

      'edit_fields' => array(
          'question' => array(
              'title' => 'Question',
              'type' => 'text',
          ),
          'answer' => array(
              'title' => 'Answer',
              'type' => 'text',
          ),
          
      ),
  );

 
