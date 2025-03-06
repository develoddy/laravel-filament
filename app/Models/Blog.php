<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use App\Models\BlogDetail;
use Filament\Forms\Components\Section;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Blog extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'image',
        'countComment',
        'active'
    ];

    protected static function booted()
    {
        static::creating(function ($blog) {
            $blog->slug = Str::slug($blog->title);
        });
    }

    public function getRouteKeyName()
    {
        return 'slug';
    }

    public function details(): HasMany
    {
        return $this->hasMany(BlogDetail::class);
    }

    public static function getForm(): array
    {
        return [
            TextInput::make('title')
                ->label('Titulo')
                ->required()
                ->columnSpanFull()
                ->maxLength(255),
            RichEditor::make('description')
                ->label('Descripción')
                ->columnSpanFull(),
            FileUpload::make('image')
                ->label('Imagen')
                ->image()
                ->imageEditor()
                ->directory('blogs'),
            Toggle::make('active')
                ->label('Publicado')
                ->required(),
        ];
    }
}
