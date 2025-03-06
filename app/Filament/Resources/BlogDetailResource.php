<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BlogDetailResource\Pages;
use App\Filament\Resources\BlogDetailResource\RelationManagers;
use App\Models\BlogDetail;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BlogDetailResource extends Resource
{
    protected static ?string $model = BlogDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema(BlogDetail::getForm());
    }

    public static function table(Table $table): Table
    {

        // 'title',
        // 'subtitle',
        // 'description',
        // 'image',
        // 'related_images',
        // 'countComment',
        // 'viewComment',
        // 'blog_id',

        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('subtitle'),
                Tables\Columns\TextColumn::make('description')->limit(250),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\ImageColumn::make('related_images'),
                Tables\Columns\ImageColumn::make('countComment'),
                Tables\Columns\TextColumn::make('viewComment'),
                Tables\Columns\TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make()->slideOver(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBlogDetails::route('/'),
            'create' => Pages\CreateBlogDetail::route('/create'),
            'edit' => Pages\EditBlogDetail::route('/{record}/edit'),
        ];
    }
}
