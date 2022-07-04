<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Login extends Model
{
    use HasFactory;
    

    protected $guarded = array('id');
    public static $rules = array(
        'id' => 'required'

    );

    public function applications(){
        return $this->hasMany('App\Models\Application');
    }
}
