<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Group extends Model {

    public function users()
    {
        return $this->belongsToMany('App\User');
    }

    public function badges()
    {
        return $this->belongsToMany('App\Badge');
    }


}
