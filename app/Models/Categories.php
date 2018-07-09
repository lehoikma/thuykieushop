<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categories extends Model
{
    protected $table = 'categories';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title','parent_id', 'slug', 'name_seo', 'keyword', 'description', 'orders', 'status'
    ];

    public function subgoals() {
        return $this->hasMany(Categories::class, 'parent_id', 'id');
    }

    public function products() {
        return $this->hasMany(\App\Models\Products::class, 'category_id');
    }
}
