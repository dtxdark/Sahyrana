<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Poem extends Model
{
    // Set the table name if it's different from the model name
    // protected $table = 'poems';

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'content',
    ];
}
