<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model {

    public function groups()
    {
        return $this->belongsToMany('App\Group');
    }
    public function users()
    {
        return $this->belongsToMany('App\User');
    }


}
