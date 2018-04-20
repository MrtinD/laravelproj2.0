<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function posts(){
        $this->hasOne('App\Post','post_id');
    }

    public function users(){
        $this->hasOne('App\User','id');
    }
}
