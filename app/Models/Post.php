<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'content', 'isActive', 'slug'];

    protected $casts = [
        'isActive' => 'boolean',
    ];

    public function scopeActive($query)
    {
        return $query->where('isActive', true);
    }
}
