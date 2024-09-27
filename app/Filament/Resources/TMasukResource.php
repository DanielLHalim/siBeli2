<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TMasukResource\Pages;
use App\Filament\Resources\TMasukResource\RelationManagers;
use App\Models\TMasuk;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\tSupplier;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TMasukResource extends Resource
{
    protected static ?string $model = TMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('kdMasuk')
                    ->label('Kode Masuk')
                    ->maxLength(12)
                    ->required(),
                Forms\Components\DatePicker::make('tglMasuk')
                    ->label('Tanggal Masuk')
                    ->required(),
                Forms\Components\TextInput::make('kdUser')
                    ->label('Kode User')
                    ->maxLength(12)
                    ->required(),
                Forms\Components\TextInput::make('kdSupplier')
                    ->label('Kode Supplier')
                    ->maxLength(32)
                    ->required(),
                Forms\Components\TextInput::make('totalMasuk')
                    ->label('Total Masuk')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kdMasuk')
                    ->label('Kode Masuk')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('tglMasuk')
                    ->label('Tanggal Masuk')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kdUser')
                    ->label('Kode User')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('kdSupplier')
                    ->label('Kode Supplier')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('totalMasuk')
                    ->label('Total Masuk')
                    ->sortable()
                    ->searchable(),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTMasuks::route('/'),
            'create' => Pages\CreateTMasuk::route('/create'),
            'edit' => Pages\EditTMasuk::route('/{record}/edit'),
        ];
    }
}