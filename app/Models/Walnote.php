<?php

namespace App\Models;

class Walnote extends \Eloquent {
    
    protected $fillable = array('number');

   
    public function walnotehistoryitems() {
        return $this->hasMany('Walnotehistoryitem');
    }

}
