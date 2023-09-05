<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;


/**
 * @property bool $published
 * @property Carbon $published_at
 */
class Post extends Model
{
    use HasFactory;

    /**
     * Summary of fillable
     * @var array
     */
    protected $fillable = [
        'user_id', 'group_id',
        'title', 'content',
        'published', 'published_at',
    ];

    /**
     * Summary of casts
     * @var array
     */
    protected $casts = [
        'user_id' => 'integer',
        'published' => 'boolean',
        'published_at' => 'datetime',
    ];

    /**
     * Summary of isPublished
     * @return bool
     */
    public function isPublished() : bool
    {
        return $this->published
        && $this->published_at;
    }
}
