<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //comments
    protected $table = "comentarios";
    public function  user(){
        return $this->belongsTo('App\usuario');
    }

}
