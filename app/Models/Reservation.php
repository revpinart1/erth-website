<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'museum_id',
        'user_id',
        'visit_date',
        'number_of_visitors',
        'payment_method',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function museums()
    {
        return $this->belongsTo(Museums::class,  'museum_id');
    }
}
