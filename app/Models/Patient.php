<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use HasFactory;

    protected $fillable =[
        'lname',
        'fname',
        'mname',
        'bdate',
        'age',
        'contact',
        'complaint'
    ];
}
