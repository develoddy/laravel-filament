<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Portfolio extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'slug',
    ];

    protected static function booted()
    {
        static::creating(function ($portfolio) {
            $portfolio->slug = Str::slug($portfolio->titulo);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }
}
