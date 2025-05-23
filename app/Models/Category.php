<?php

namespace App\Models;

use App\Scopes\CategoryScope;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'popularity',
    ];

    protected static function booted(): void
    {
        static::addGlobalScope('category', new CategoryScope);
    }
}
