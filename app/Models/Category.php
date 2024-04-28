<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Category extends Model
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
    ];


    public function poets(): HasMany
    {
        return $this->hasMany(self::class, 'poet_id');
    }
    public function book(): HasMany
    {
        return $this->hasMany(self::class, 'book_id');
    }
}
