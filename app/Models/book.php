<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    // Set the table name if it's different from the model name
    // protected $table = 'books';

    // Fillable fields for mass assignment
    protected $fillable = [
        'title',
        'author',
        'publication_date',
    ];
}
