<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name', 'description','created_at','url',
    ];

    //para la url limpia

    public function getRouteKeyName(){
        return 'url';
    }
}
