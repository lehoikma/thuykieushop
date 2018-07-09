<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $table = 'news';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title', 'content', 'news_image', 'status', 'slug', 'description', 'tags_id', 'name_seo', 'key_word', 'status_display'
    ];

    public function tags() {
        return $this->belongsTo(\App\Models\Tags::class, 'tags_id');
    }

}
