<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UuidModel;
use App\Models\Comment;

class Item extends UuidModel
{
    use HasFactory;

    protected $fillable = [
        'name',
    ];

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
