<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\Post;
use App\Models\Portfolio;

use Filament\Forms\Components\TextInput;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'title', 
        'slug'
    ];

    // Relation to Posts
    public function posts(): BelongsToMany
    {
        return $this->belongsToMany(Post::class);
    }


    // Relación inversa (muchos a uno)
    public function portfolios(): HasMany
    {
        return $this->hasMany(Portfolio::class, 'category_id');
    }


    public static function getForm(): array
    {
      return [
        TextInput::make('title')
            ->label('Nombre')
            ->columnSpanFull()
            ->required()
            ->maxLength(2048),
        TextInput::make('slug')
            ->required()
            ->columnSpanFull()
            ->maxLength(1000),
      ];
    }
}
