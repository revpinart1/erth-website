<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Regions extends Model
{
    protected $fillable = [
        'name',
       
    ];

    public function museums(){
        return $this->hasMany(Museums::class);
    }
}



