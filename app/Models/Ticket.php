<?php

namespace App\Models;

use App\Traits\FormatValueInMoney;
use Brick\Math\BigDecimal;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Ticket extends Model
{
    use HasFactory, FormatValueInMoney;

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
        'end_date',
        'value',
        'is_active',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array<int, string>
     */
    protected $casts = [
        'end_date' => 'datetime',
    ];

    /**
     * The attributes that should be cast.
     *
     * @return string
     */
    protected function getFormattedEndDateAttribute(): string
    {
        return $this->end_date->format('d/m/Y H:i:s');
    }

    /**
     * Format the value attribute.
     */
    protected function getFormattedValueAttribute(): string
    {
        return 'R$ ' . number_format($this->value, 2, ',', '.');
    }

    /**
     * Set the value attribute.
     */
    protected function setValueAttribute($value): void
    {
        $this->attributes['value'] = $this->execute($value);
    }


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
