<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Issue extends Model
{

    const OPEN_STATUS = 0;

    const CLOSED_STATUS = -10;

    function project()
    {
        return $this->belongsTo('App\Project');
    }

    function comments()
    {
        return $this->hasMany('App\Comment');
    }

}
