<?php

namespace App\Filament\Resources\CrudRsiResource\Pages;

use App\Filament\Resources\CrudRsiResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListCrudRsis extends ListRecords
{
    protected static string $resource = CrudRsiResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
