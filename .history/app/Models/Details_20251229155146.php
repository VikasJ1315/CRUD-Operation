<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Details extends Model
{
    protected $table = 'details';

    protected
    $fillable = [
        'name',
        'email',
        'phone',
        'status',
    ];
}