<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = ['blog_id', 'content', 'image_url', 'likes_count'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function blog()
    {
        return $this->belongsTo(Blog::class);
    }

    public function comments()
    {
        return $this->hasMany(Comments::class);
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }
}
