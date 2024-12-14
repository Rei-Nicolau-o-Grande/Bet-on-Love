<?php

namespace App\Models;

use App\Traits\FormatOdd;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    use HasFactory, FormatOdd;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'posts';

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'content',
        'status_post',
        'code',
        'finish_date',
        'odd',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'finish_date' => 'datetime',
        'is_active' => 'boolean',
    ];

    /**
     * Get the tickets associated with the posts.
     */
    public function tickets(): HasMany
    {
        return $this->hasMany(Ticket::class);
    }

    /**
     * Generate a unique code for the post.
     */
    public static function generateUniqueCode(): string
    {
        do {
            $code = substr(md5(uniqid(rand(), true)), 0, 8);
            $exists = Post::where('code', $code)->exists();
        } while ($exists);

        return $code;
    }

    /**
     * Set attribute odd to format 2 decimal places.
     */
    public function setOddAttribute($value): void
    {
        $this->attributes['odd'] = $this->formatOdd($value);
    }

}
