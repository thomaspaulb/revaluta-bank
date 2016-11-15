<?php

namespace App\Models;

class Omaproject extends \Eloquent {
    
    public function omanotes() {
        return $this->belongsTo('Omanote');
    }

}
