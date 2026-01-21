<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Portfolio;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class PortfolioDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'images',
        'mvp_url',
        'client',
        'awards',
        'category',
        'related_images',
        'created_at',
        'updated_at',
        'status',
        'stack',
        'launched_at',
        'portfolio_id',
    ];

    protected $casts = [
        'images'         => 'array',
        'related_images' => 'array',
        'launched_at'    => 'date',
    ];

    // Relación inversa (muchos a uno)
    public function portfolio(): BelongsTo
    {
        return $this->belongsTo(Portfolio::class);
    }

    public static function getForm(): array
    {
        return [
            Section::make('Información del contenido')
                ->columns(2)
                ->schema([
                    TextInput::make('title')
                    ->label('Título')
                    ->columnSpanFull(),
                    RichEditor::make('description')
                        ->label('Descripción')
                        ->columnSpanFull(),
                    FileUpload::make('images')
                        ->label('Multiple imagenes')
                        ->columnSpanFull()
                        ->image()
                        ->multiple(),
                    TextInput::make('mvp_url')
                        ->label('MVP URL')
                        ->url()
                        ->placeholder('https://your-mvp.com')
                        ->columnSpanFull(),
                    TextInput::make('client')
                        ->label('Cliente')
                        ->columnSpanFull(),
                    TextInput::make('awards')
                        ->label('Premios')
                        ->columnSpanFull(),
                    TextInput::make('category')
                        ->label('Categoría')
                        ->columnSpanFull(),
                    FileUpload::make('related_images')
                        ->label('Multiple imagenes relacionadas')
                        ->columnSpanFull()
                        ->image()
                        ->multiple(),
                    Select::make('status')
                        ->label('Status')
                        ->options([
                            'Live' => 'Live 🚀',
                            'Testing' => 'Testing 🧪',
                        ])
                        ->default('Testing')
                        ->columnSpanFull(),

                    TextInput::make('stack')
                        ->label('Stack')
                        ->placeholder('NodeJS + Angular + MySQL')
                        ->columnSpanFull(),

                    DateTimePicker::make('launched_at')
                        ->label('Launched')
                        ->columnSpanFull(),
                ]),

            Section::make('Asocia con el portafolio principal')
                ->columns(2)
                ->schema([
                    Select::make('portfolio_id')
                    ->label('Portafolio principal')
                    ->relationship('portfolio', 'titulo')
                    ->searchable()
                    ->preload()
                    ->createOptionForm(Portfolio::getForm())
                    ->editOptionForm(Portfolio::getForm())
                    ->required(),
                    //   Select::make('category_id')
                    //   ->label('Categoría')
                    //   ->relationship('category', 'name')
                    //   ->searchable()
                    //   ->preload()
                    //   ->createOptionForm(Category::getForm())
                    //   ->editOptionForm(Category::getForm())
                    //   ->required(),
                ]),
        ];
    }
}
