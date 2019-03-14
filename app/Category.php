<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\intity;


class Category extends Model
{
    protected $fillable = [
        'name', 'status'
    ];

    public function intities(){
        return $this->hasMany('App\intity');
    }

}
