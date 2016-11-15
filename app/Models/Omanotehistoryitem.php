<?php

namespace App\Models;

class Omanotehistoryitem extends \Eloquent {
    
    protected $fillable = array('nameFrom', 'nameTo', 'emailFrom', 'emailTo', 'companyTo', 'aboutTo', 'comments', 'omanote_id');

    
    public function omanotes() {
        return $this->belongsTo('Omanote');
    }

}

