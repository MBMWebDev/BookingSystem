<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Chambre;

class Hotel extends Model
{
    public function offres(){
        return $this->belongsTo(Offre::class,'hotel_id','id');
      }
}
