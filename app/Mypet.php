<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mypet extends Model
{
    protected $guarded = array('id');

    public static $rules = array(
        'name' => 'required',
        'birthday' => 'required',
        'gender' => 'required',
        'kind' => 'required',
        
    );
    
}
