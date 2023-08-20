<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Makereglog extends Model
{
    protected $fillable = [
        'fname',
        'lname',
        'age',
        'contact',
        'gender',
        'password',
        'email',
    ];
}