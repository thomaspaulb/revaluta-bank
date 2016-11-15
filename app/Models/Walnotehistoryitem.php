<?php

namespace App\Models;

class Walnotehistoryitem extends \Eloquent {
    
    protected $fillable = array('nameFrom', 'nameTo', 'emailFrom', 'emailTo', 'message', 'walnote_id');

    
    public function walnotes() {
        return $this->belongsTo('Walnote');
    }

}
