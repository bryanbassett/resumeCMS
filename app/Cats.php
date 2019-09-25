<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cats extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','name', 'section','weight'
    ];
    public function getRouteKey(){
      return 'id';
    }
}