<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'publication_date',
        'poet_id',
        'category_id',
    ];



    public function poet()
{
    return $this->belongsTo(Poet::class);
}
    public function book()
    {
        return $this->belongsTo(Book::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function poems()
    {
        return $this->hasMany(Poem::class);
    }
}
