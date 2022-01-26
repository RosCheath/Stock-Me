<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public $fillable = [
        'to','name','email', 'subject','message','is_success'
    ];
    
    public $casts =[

        'is_success' => 'boolean'
    ];
    public static $rule =[
        'name' => 'required|min:2|max:30',
        'email' =>'required',
        'message'=>'required'

    ];
}
