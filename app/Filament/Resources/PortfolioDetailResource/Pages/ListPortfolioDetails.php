<?php

namespace App\Filament\Resources\PortfolioDetailResource\Pages;

use App\Filament\Resources\PortfolioDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListPortfolioDetails extends ListRecords
{
    protected static string $resource = PortfolioDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
