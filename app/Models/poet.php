<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poet extends Model
{
    // Set the table name if it's different from the model name
    // protected $table = 'poets';

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
        'bio',
    ];
}
