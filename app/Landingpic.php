<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Landingpic extends Model
{


    use SoftDeletes;

    protected $dates = ['deleted_at'];
    
    public function belongsToUser(){
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
