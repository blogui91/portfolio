<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{

    protected $with = [
        'technologies'
    ];
     /**
     * The technologies that belong to the user.
     */
    public function technologies()
    {
        return $this->belongsToMany('App\Technology');
    }
}
