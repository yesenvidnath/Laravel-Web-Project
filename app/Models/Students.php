<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Students extends Model
{
    use HasFactory;

    //Adding the fillables to the properties from the DB added by me
    protected $fillable =[

        'name',
        'school',
        'Addreess',
        'nic',
        'phone',
    ];
}
