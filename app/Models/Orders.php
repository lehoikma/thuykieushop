<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'product_id', 'member_id', 'numbers', 'price_orders', 'status', 'count', 'km'
    ];

    public function products() {
        return $this->belongsTo(\App\Models\Products::class, 'product_id');
    }

    public function members() {
        return $this->belongsTo(\App\Models\Members::class, 'member_id');
    }

}
