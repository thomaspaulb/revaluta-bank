 <?php


 /**
   * Home Page Text model config
   */

 return array(

      'title' => 'WAL Page Texts',
      'single' => 'WAL Page Text',
      'model' => 'App\Models\Walpagetext',

      'columns' => array(
          'walpagesubtitle' => array(
              'title' => 'WAL Subtitle Text',
          ),
          'walpagewelcome' => array(
              'title' => 'WAL Page Welcome Text',
          ),
          'walsinglewelcome' => array(
              'title' => 'WAL Note Welcome Text',
          ),
          'walsinglesuccess' => array(
              'title' => 'WAL Note Success Text',
          ),
        
      ),

      'edit_fields' => array(
          'walpagesubtitle' => array(
              'title' => 'WAL Subtitle Text',
              'type' => 'text',
          ),
          'walpagewelcome' => array(
              'title' => 'WAL Page Welcome Text',
              'type' => 'text',
          ),
          'walsinglewelcome' => array(
              'title' => 'WAL Note Welcome Text',
              'type' => 'text',
          ),
          'walsinglesuccess' => array(
              'title' => 'WAL Note Success Text',
              'type' => 'text',
          ),
        
      ),
  );

 
