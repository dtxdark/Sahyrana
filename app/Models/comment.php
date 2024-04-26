<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    // Set the table name if it's different from the model name
    // protected $table = 'comments';

    // Fillable fields for mass assignment
    protected $fillable = [
        'content',
    ];
}
