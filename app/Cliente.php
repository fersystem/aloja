<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    public function movimientopeso()
    {
        return $this->hasMany('Movimientopeso'::class);
    }
    
}
