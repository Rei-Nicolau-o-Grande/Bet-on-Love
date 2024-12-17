<?php

namespace App\Models;

use Brick\Math\BigDecimal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'tickets';

    /**
         * The attributes that are mass assignable.
     *
     * @var array<int, string, BigDecimal, boolean>
     */
    protected $fillable = [
        'user_id',
        'post_id',
        'place',
        'code',
        'value',
        'is_active',
    ];

    /**
     * Get the user that owns the ticket.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the posts that owns the ticket.
     */
    public function post(): BelongsTo
    {
        return $this->belongsTo(Post::class);
    }
}
