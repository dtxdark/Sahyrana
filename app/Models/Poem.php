<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Poem extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];
    protected $fillable = [
        'title',
        'content',
    ];


    protected function casts(): array
    {
        return [
            'created_at' => 'datetime',
            'updated_at' => 'datetime',
        ];
    }
    public function category(): BelongsTo
    {
        return $this->belongsTo(category::class);
    }
    public function book(): BelongsTo
    {
        return $this->belongsTo(book::class, 'book_id');
    }
    public function poets(): BelongsTo
    {
        return $this->belongsTo(poet::class, 'poet_id');
    }
}
