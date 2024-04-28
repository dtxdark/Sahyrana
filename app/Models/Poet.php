<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Poet extends Model
{
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'name',
        'bio',
    ];


    public function books(): HasMany
    {
        return $this->hasMany(self::class, 'book_id');
    }
    public function poems(): HasMany
    {
        return $this->hasMany(self::class, 'poem_id');
    }
}
