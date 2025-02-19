<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\PortfolioDetail;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\HasMany;

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

    // Relación con PortfolioDetail (Un Portfolio tiene muchos detalles)
    public function details(): HasMany
    {
        return $this->hasMany(PortfolioDetail::class);
    }

    public static function getForm(): array
    {
      return [
        TextInput::make('titulo')
            ->label('Titulo')
            ->required()
            ->columnSpanFull()
            ->maxLength(255),
        RichEditor::make('descripcion')
            ->label('Descripción')
            ->columnSpanFull(),
        FileUpload::make('imagen')
            ->label('Imagen')
            ->image()
            ->imageEditor()
            ->directory('portfolios'),
      ];
    }
}
