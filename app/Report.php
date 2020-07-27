<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    public function user(){
        return $this->hasOne('App\User', 'id', 'user_id')->withTrashed();
    }
}
