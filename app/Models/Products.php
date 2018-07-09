<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'products';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'category_id','tags_id', 'origin', 'description', 'content', 'price', 'view', 'price_km', 'avatar', 'image', 'slug', 'ma_sv', 'key_word', 'status', 'khoi_luong'
    ];

    public function categories() {
        return $this->belongsTo(\App\Models\Categories::class, 'category_id');
    }

    public function tags() {
        return $this->belongsTo(\App\Models\Tags::class, 'tags_id');
    }
}
