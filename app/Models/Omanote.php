<?php

namespace App\Models;

class Omanote extends \Eloquent {
    
    protected $fillable = array('number');
   
    public function omanotehistoryitems() {
        return $this->hasMany('Omanotehistoryitem');
    }

}
