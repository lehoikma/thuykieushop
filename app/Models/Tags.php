<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tags extends Model
{
    protected $table = 'tags';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];
//
//    public function members() {
//        return $this->belongsTo(\App\Models\Members::class, 'member_id');
//    }

}
