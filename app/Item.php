<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    protected $fillable = ['name', 'days'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
