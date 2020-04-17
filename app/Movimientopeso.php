<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movimientopeso extends Model 
{
    //
    public function cuenta()
    {
        
        return $this->belongsTo(Cuenta::class);
        //return $this->belongsTo('App\Cuenta','nombre_cuenta');
        //return $this->belongsTo('App\Cuenta','$nombre_cuenta');
        //return $this->belongsTo('App\Cuenta','cuenta');
        //return $this->belongsTo(Cuenta);
}

}
