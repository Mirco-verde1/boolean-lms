<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $fillable = ['name', 'hours', 'cost'];

    public function categories(){
        return $this->belongsToMany('App\Category');
    }

    public function chapters(){
        return $this->hasMany('App\Course');
    }
}
