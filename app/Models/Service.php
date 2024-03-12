<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'identifier',
        'name',
        'slug',
        'description',
        'overview',
        'keywords',
        'photo',
        'published_at',
        'active',
        'featured',
    ];
}
