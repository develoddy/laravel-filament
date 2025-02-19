<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PortfolioDetailResource\Pages;
use App\Filament\Resources\PortfolioDetailResource\RelationManagers;
use App\Models\PortfolioDetail;
use App\Models\Portfolio;
use Filament\Forms;
use Filament\Forms\Components\Section;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;


class PortfolioDetailResource extends Resource
{
    protected static ?string $model = PortfolioDetail::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form->schema(PortfolioDetail::getForm());
            
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('description')->limit(250),
                Tables\Columns\ImageColumn::make('images'),
                Tables\Columns\ImageColumn::make('client'),
                Tables\Columns\TextColumn::make('awards'),
                Tables\Columns\TextColumn::make('category'),
                Tables\Columns\ImageColumn::make('related_images'),
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
            'index' => Pages\ListPortfolioDetails::route('/'),
            'create' => Pages\CreatePortfolioDetail::route('/create'),
            'edit' => Pages\EditPortfolioDetail::route('/{record}/edit'),
        ];
    }
}
