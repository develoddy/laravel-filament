<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\PortfolioDetail;
use App\Models\Category;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Portfolio extends Model
{
    use HasFactory;
    

    protected $fillable = [
        'titulo',
        'descripcion',
        'imagen',
        'mvp_url', 
        'slug',
        'category_id'
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

  
    public function category(): BelongsTo
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }

    public static function getForm(): array
    {
        return [
            Section::make('Información del contenido')
                ->columns(2)
                ->schema([
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
                    TextInput::make('mvp_url')
                    ->label('MVP URL')
                    ->url()
                    ->placeholder('https://your-mvp.com')
                    ->columnSpanFull(),
                ]),

                Section::make('Asocia con la categoría principal')
                ->columns(2)
                ->schema([
                    Select::make('category_id')
                    ->label('Categoría principal')
                    ->relationship('Category', 'title')
                    ->searchable()
                    ->preload()
                    ->createOptionForm(Category::getForm())
                    ->editOptionForm(Category::getForm())
                    ->required(),
                ]),
        ];
    }
}
