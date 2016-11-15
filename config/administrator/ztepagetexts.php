 <?php


 /**
   * Home Page Text model config
   */

 return array(

      'title' => 'ZTE Page Texts',
      'single' => 'ZTE Page Text',
      'model' => 'App\Models\Ztepagetext',

      'columns' => array(
          'ztepagesubtitle' => array(
              'title' => 'ZTE Page Subtitle Text',
          ),
          'ztepagewelcome' => array(
              'title' => 'ZTE Page Text',
          ),
        
      ),

      'edit_fields' => array(
          'ztepagesubtitle' => array(
              'title' => 'ZTE Page Subtitle Text',
              'type' => 'text',
          ),
          'ztepagewelcome' => array(
              'title' => 'ZTE Page Text',
              'type' => 'text',
          ),
        
      ),
  );

 
