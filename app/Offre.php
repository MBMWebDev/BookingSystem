<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Offre extends Model
{
    public function hotels(){
        return $this->belongsTo(Hotel::class,'hotel_id');
      }
      public function reservations(){
        return $this->belongsTo(Reservation::class,'offre_id','id');
      }
}
