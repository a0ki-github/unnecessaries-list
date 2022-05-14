<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UuidModel;

class Item extends UuidModel
{
    use HasFactory;

    protected $fillable = [
        'uuid',
        'name',
    ];
}
