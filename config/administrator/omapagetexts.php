 <?php


 /**
   * Home Page Text model config
   */

 return array(

      'title' => 'OMA Page Texts',
      'single' => 'OMA Page Text',
      'model' => 'App\Models\Omapagetext',

  
      'columns' => array(
          'omapagesubtitle' => array(
              'title' => 'OMA Subtitle Text',
          ),
          'omapagewelcome' => array(
              'title' => 'OMA Welcome Text',
          ),
          'omasinglesuccess' => array(
              'title' => 'OMA Success Text',
          ),
          'omasinglewelcomenoproject' => array(
              'title' => 'OMA Welcome Text (No Project)',
          ),
          'omasinglewelcomehasproject' => array(
              'title' => 'OMA Welcome Text (Has Project)',
          ),
          'omasingleWelcomeexpired' => array(
              'title' => 'OMA Welcome Text (Expired Project)',
          ),
        
        
      ),

      'edit_fields' => array(
          'omapagesubtitle' => array(
              'title' => 'OMA Subtitle Text',
              'type' => 'text',
          ),
          'omapagewelcome' => array(
              'title' => 'OMA Welcome Text',
              'type' => 'text',
          ),
          'omasinglesuccess' => array(
              'title' => 'OMA Success Text',
              'type' => 'text',
          ),
          'omasinglewelcomenoproject' => array(
              'title' => 'OMA Welcome Text (No Project)',
              'type' => 'text',
          ),
          'omasinglewelcomehasproject' => array(
              'title' => 'OMA Welcome Text (Has Project)',
              'type' => 'text',
          ),
          'omasingleWelcomeexpired' => array(
              'title' => 'OMA Welcome Text (Expired Project)',
              'type' => 'text',
          ),
        
      ),
  );

 
