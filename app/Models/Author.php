<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Author extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'birth_date',
        'dead_date',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'dead_date' => 'date',
    ];

    public function getAgeAttribute()
    {
        return $this->dead_date->diffInYears($this->birth_date);
    }

    public function getRouteKeyName(): string
    {
        return 'slug';
    }
}
