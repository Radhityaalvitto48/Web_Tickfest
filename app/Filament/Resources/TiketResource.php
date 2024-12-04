<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TiketResource\Pages;
use App\Filament\Resources\TiketResource\RelationManagers;
use App\Models\Tiket;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TiketResource extends Resource
{
    protected static ?string $model = Tiket::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                ->required(),
            Forms\Components\TextInput::make('price')
                ->label('Harga Tiket')
                ->required()
                ->integer()
                ->minValue(0)
                ->placeholder('Masukkan harga tiket')
                ->hint('Harga dalam Rupiah, tanpa tanda titik atau koma')
                ->prefix('Rp'),
            Forms\Components\DatePicker::make('date')
                ->label('Tanggal Event')
                ->required(),
            Forms\Components\Select::make('location')
                ->label('Lokasi')
                ->relationship('kota', 'name')
                ->required()
                ->placeholder('Pilih lokasi tiket'),
            Forms\Components\FileUpload::make('image')
                ->directory('ImageBanner')
                ->required()
                ->image()
                ->columnSpanFull(),
            Forms\Components\RichEditor::make('description')
                ->required()
                ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')->searchable()->sortable(),
                Tables\Columns\TextColumn::make('price')->formatStateUsing(fn(string $state): string=> 'Rp.'. number_format($state,0,',','.')),
                Tables\Columns\TextColumn::make('date')->date('d F Y'),
                Tables\Columns\TextColumn::make('Kota.name')->searchable()->sortable(),
                Tables\Columns\ImageColumn::make('image'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\DeleteAction::make(),
                Tables\Actions\EditAction::make(),
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
            'index' => Pages\ListTikets::route('/'),
            'create' => Pages\CreateTiket::route('/create'),
            'edit' => Pages\EditTiket::route('/{record}/edit'),
        ];
    }
}
