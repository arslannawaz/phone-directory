<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class intity extends Model
{

    protected $fillable = [
        'name', 'instagram', 'twitter','facebook','snapchat','address','tollfree','landline','website','status','categories_id'
    ];



    public function categories(){
        return $this->belongsTo('App\Category');
    }
}
