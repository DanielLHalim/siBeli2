<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TSupplierResource\Pages;
use App\Filament\Resources\TSupplierResource\RelationManagers;
use App\Models\TSupplier;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TSupplierResource extends Resource
{
    protected static ?string $model = TSupplier::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Input untuk kode supplier
                Forms\Components\TextInput::make('kdSupplier')
                    ->label('Kode Supplier')
                    ->maxLength(12) // sesuai dengan migration
                    ->required(),

                // Input untuk nama supplier, harus unik
                Forms\Components\TextInput::make('namaSupplier')
                    ->label('Nama Supplier')
                    ->maxLength(32) // sesuai dengan migration
                    ->required()
                    ->unique(ignoreRecord: true), // menambahkan unique untuk menghindari duplikasi

                // Input untuk alamat supplier, harus unik
                Forms\Components\TextInput::make('alamat')
                    ->label('Alamat')
                    ->required()
                    ->unique(ignoreRecord: true), // menambahkan unique untuk menghindari duplikasi
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('kdSupplier')
                    ->label('Kode Supplier')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('namaSupplier')
                    ->label('Nama Supplier')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('alamat')
                    ->label('Alamat')
                    ->sortable()
                    ->searchable(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListTSuppliers::route('/'),
            'create' => Pages\CreateTSupplier::route('/create'),
            'edit' => Pages\EditTSupplier::route('/{record}/edit'),
        ];
    }
}
