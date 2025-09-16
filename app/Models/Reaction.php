<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reaction extends Model
{
    /** @use HasFactory<\Database\Factories\ReactionFactory> */
    use HasFactory;

    protected $fillable = [
        'reaction_type_id',
        'user_id',
        'reactable_type',
        'reactable_id',
    ];
    // Relationships
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
    public function reaction_type(): BelongsTo
    {
        return $this->belongsTo(ReactionType::class);
    }
    public function reactable(): MorphTo
    {
        return $this->morphTo();
    }
}
