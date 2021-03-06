<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\UuidModel;
use App\Models\Item;
use App\Models\User;

class Comment extends UuidModel
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'item_uuid',
        'content'
    ];

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
