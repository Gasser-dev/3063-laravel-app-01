<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reply extends Model
{
    /** @use HasFactory<\Database\Factories\ReplyFactory> */
    use HasFactory;
    protected $fillable = [
        'reply',
        'user_id',
        'comment_id',
    ];
    // Relationships
    public function comment(): BelongsTo
    {
        return $this->belongsTo(Comment::class);
    }
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function reactable(): MorphMany
    {
        return $this->morphMany(Reaction::class, 'reactable');
    }
}
