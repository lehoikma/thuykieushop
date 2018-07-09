<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Members extends Model
{
    protected $table = 'members';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'mail', 'phone', 'address'
    ];

}
