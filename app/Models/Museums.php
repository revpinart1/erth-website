<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Museums extends Model
{
    protected $fillable = [
        'museum_name',
        'museum_region_id', //forign key
        'museum_city',
        'museum_type',
        'museum_workdays',
        'museum_openinghours',
        'museum_description',
        'museum_location',
        'museum_bookingavaliable',
        'museum_enterfee',
        'museum_image'
    
       
    ];
    
    public function Region(){
        return $this->belongsTO(Regions::class, 'museum_region_id', 'id');
    }
    public function reservations()
{
    return $this->hasMany(Reservation::class);
}
    
}
