<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = array('id');
    
    //
    public static $rules = array(
        'tiitle' => 'required',
        'body' => 'required',
    );
}