<?php

namespace App\Filament\Resources\Hotels\Schemas;

use App\Enums\StorageLocations;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Schemas\Schema;

class HotelForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('name'),
                TextInput::make('city'),
                TextInput::make('contact_number'),
                TextInput::make('address'),
                TextInput::make('tag_line'),
                Textarea::make('description')
                    ->columnSpanFull(),
                Select::make('status')
                    ->options(['active' => 'Active', 'inactive' => 'Inactive'])
                    ->default('active')
                    ->required(),
                FileUpload::make('logo')
                    ->image() // optional: restrict to images only
                    ->disk('public') // specify storage disk
                    ->directory(StorageLocations::HOTEL_LOGO->value) // optional: subfolder
                    ->required(),
            ]);
    }
}
