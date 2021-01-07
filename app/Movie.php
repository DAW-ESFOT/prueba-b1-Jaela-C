<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    protected $fillable = ['name', 'code', 'year', 'available'];

    public function genders()
    {
        return $this->belongsTo('App\Genre');
    }
}
