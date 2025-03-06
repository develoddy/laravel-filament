<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Blog;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\DateTimePicker;
use Illuminate\Database\Eloquent\Relations\BelongsTo;



class BlogDetail extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'subtitle',
        'description',
        'image',
        'related_images',
        'countComment',
        'viewComment',
        'blog_id',
    ];

    protected $casts = [
        'related_images' => 'array',
    ];

    public function blog(): BelongsTo
    {
        return $this->belongsTo(Blog::class);
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
                        TextInput::make('subtitle')
                        ->label('Subtítulo')
                        ->columnSpanFull(),
                    RichEditor::make('description')
                        ->label('Descripción')
                        ->columnSpanFull(),
                    FileUpload::make('image')
                        ->label('Imagen Principal')
                        ->columnSpanFull()
                        ->image(),
                    FileUpload::make('related_images')
                        ->label('Multiple imagenes relacionadas')
                        ->columnSpanFull()
                        ->image()
                        ->multiple(),
                    TextInput::make('countComment')
                        ->label('Total comentarios')
                        ->columnSpanFull(),
                    TextInput::make('viewComment')
                        ->label('Vistas de comentatios')
                        ->columnSpanFull(),
                    
                ]),

            Section::make('Asocia con el blog principal')
                ->columns(2)
                ->schema([
                    Select::make('blog_id')
                    ->label('Blog principal')
                    ->relationship('blog', 'title')
                    ->searchable()
                    ->preload()
                    ->createOptionForm(Blog::getForm())
                    ->editOptionForm(Blog::getForm())
                    ->required(),
                ]),
        ];
    }
}
