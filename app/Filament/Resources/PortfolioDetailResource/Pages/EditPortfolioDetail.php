<?php

namespace App\Filament\Resources\PortfolioDetailResource\Pages;

use App\Filament\Resources\PortfolioDetailResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditPortfolioDetail extends EditRecord
{
    protected static string $resource = PortfolioDetailResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
