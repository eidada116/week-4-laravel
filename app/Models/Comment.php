<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
class Comment extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function comment(): BelongsTo{
        return $this->belongsTo(Comment::class, 'parent_comment_id', 'id');
    }
    public function comments(): HasMany{
        return $this->hasMany(Comment::class);
    }

    public function post(): BelongsTo{
        return $this->belongsTo(Comment::class, 'post_id');
        //post belongs to many comments (because a post can have many comments)
    }
}
