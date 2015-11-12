<?php

namespace IdeaTrick;

use Illuminate\Database\Eloquent\Model;

class Partnership extends Model
{
    protected $table = 'ask_partnerships';

    protected $fillable =[
        'email',
    	'phone',
    	'link-type',
    	'link-url'
    ];

    protected $dates = ['added_at'];

    public $timestamps = false;
}
