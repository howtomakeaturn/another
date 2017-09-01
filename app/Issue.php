<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    function project()
    {
        return $this->belongsTo('App\Project');
    }

    function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
