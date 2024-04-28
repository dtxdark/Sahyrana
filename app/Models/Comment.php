<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Comment extends Model
{
    protected $guarded = [
        'id',
    ];

    protected $fillable = [
        'content',
    ];

    public function poem(): BelongsTo
    {
        return $this->belongsTo(Poem::class, 'poem_id');
    }
}
