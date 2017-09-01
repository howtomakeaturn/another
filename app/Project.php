<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    function issues()
    {
        return $this->hasMany('App\Issue');
    }

}
