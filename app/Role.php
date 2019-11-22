<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    protected $fillable = ['name'];

    public function users()
    {
        # code...
        return $this->belongsToMany('App\User')->withPivot('created_at');
    }
}
