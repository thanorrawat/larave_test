<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Domains\Blog\Models\PostLike;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Post extends Model
{
    protected $fillable = [
        'title',
        'body',
    ];

    protected static function booted()
    {
        // We will automatically add the user to the post when it's saved.
        static::creating(function ($post) {
            if (auth()->user()) {
                $post->user_id = auth()->id();
            }
        });
    }

    public function likes(): HasMany
    {
        return $this->hasMany(PostLike::class);
    }
}