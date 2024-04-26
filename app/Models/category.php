<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    // Set the table name if it's different from the model name
    // protected $table = 'categories';

    // Fillable fields for mass assignment
    protected $fillable = [
        'name',
    ];
}
