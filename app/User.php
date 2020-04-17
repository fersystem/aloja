<?php

namespace App;

    use Illuminate\Database\Eloquent\Model;

class User extends Model
{
public function person()
{
    return $this->belongsTo('App\Person'); 
}

public function posts()
{
    return $this->hasMany('App\Post');
}
}


