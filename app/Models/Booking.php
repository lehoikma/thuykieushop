<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Booking extends Model
{
    protected $table = 'bookings';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'numbers'
    ];

    public function products() {
        return $this->belongsTo(\App\Models\Products::class, 'product_id');
    }
}
