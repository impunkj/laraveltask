<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{


    /*
        hasmanyrelation to workshop
    */
    public function workshops() {
        return $this->hasMany(Workshop::class);
    }

}
