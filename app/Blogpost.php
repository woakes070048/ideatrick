<?php

namespace IdeaTrick;

use Illuminate\Database\Eloquent\Model;

class Blogpost extends Model
{
    protected $table = 'blogposts';

    protected $fillable = [
            'title',
            'content',
            'featured_image',
            'published_at'
    ];
}
