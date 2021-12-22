<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Weight extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'weight' => 'required'
        
    );
    
}
