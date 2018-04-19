<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['name','email','address', 'city'];

    public function players() {

    	return $this->hasMany('App\Player');
    }

    public function comments() {
    	return $this->hasMany('App\Comment');
    }
}
