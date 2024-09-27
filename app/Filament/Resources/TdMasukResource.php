<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TdMasukResource\Pages;
use App\Filament\Resources\TdMasukResource\RelationManagers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use App\Models\tMasuk;
use App\Models\tdMasuk;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TdMasukResource extends Resource
{
    protected static ?string $model = TdMasuk::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk idMasuk yang bersifat unique
                Forms\Components\TextInput::make('idMasuk')
                    ->label('ID Masuk')
                    ->maxLength(5)
                    ->required()
                    ->unique(), // pastikan ini unik sesuai dengan migration

                // Pilihan untuk kdMasuk dari tabel TMasuk
                Forms\Components\Select::make('kdMasuk')
                    ->label('Kode Masuk')
                    ->options(TMasuk::all()->pluck('kdMasuk', 'kdMasuk')) // ambil kdMasuk dari tabel TMasuk
                    ->searchable(),

                Forms\Components\TextInput::make('kdBarangBeli')
                    ->label('Kode Barang Beli')
                    ->maxLength(24) // sesuai dengan migration
                    ->required(),

                Forms\Components\TextInput::make('jumlah')
                    ->label('Jumlah')
                    ->numeric()
                    ->required(),

                Forms\Components\TextInput::make('subtotal')
                    ->label('Sub Total')
                    ->numeric()
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('idMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdMasuk')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('kdBarangBeli')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('jumlah')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('subTotal')->sortable()->searchable(),
            ])
            ->filters([])
            ->actions([Tables\Actions\EditAction::make()])
            ->bulkActions([Tables\Actions\DeleteBulkAction::make()]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTdMasuks::route('/'),
            'create' => Pages\CreateTdMasuk::route('/create'),
            'edit' => Pages\EditTdMasuk::route('/{record}/edit'),
        ];
    }
}
