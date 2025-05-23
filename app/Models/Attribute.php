<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attribute extends Model
{
    use HasFactory;

    protected $fillable = [
        'width',
        'height',
        'weight',
        'pages',
    ];

    protected $casts = [
        'weight' => 'double'
    ];
}
