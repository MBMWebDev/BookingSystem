<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function offres(){
        return $this->belongsTo(Offre::class,'offre_id');
      }

      public function users(){
        return $this->belongsTo(User::class,'user_id');
      }
}
