<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PatientResource\Pages;
use App\Models\Patient;
use Filament\Forms\Form;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\Select;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PatientResource extends Resource
{
    protected static ?string $model = Patient::class;

    protected static ?string $navigationIcon = 'heroicon-o-user-group';

    protected static ?string $navigationLabel = 'Pacientes';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
            TextInput::make('nombre')
                ->required()
                ->maxLength(255),

            DatePicker::make('date_of_birth')
                ->label('Fecha de nacimiento')
                ->required(),

            Select::make('owner_id')
                ->relationship('owner', 'nombre')
                ->label('Dueño')
                ->required(),

            Select::make('tipo')
            ->label('Tipo de paciente')
            ->required()
            ->options([
                'perro' => 'Perro',
                'gato' => 'Gato',
                'conejo' => 'Conejo',
                'ave' => 'Ave',
                'otro' => 'Otro',
            ])
            ->searchable(),
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            Tables\Columns\TextColumn::make('nombre')->sortable()->searchable(),
            Tables\Columns\TextColumn::make('date_of_birth')->label('Fecha de nacimiento'),
            Tables\Columns\TextColumn::make('owner.nombre')->label('Dueño'),
            Tables\Columns\TextColumn::make('tipo'),
            Tables\Columns\TextColumn::make('created_at')->label('Creado')->dateTime(),
        ])
        ->filters([])
        ->actions([
            Tables\Actions\EditAction::make(),
            Tables\Actions\DeleteAction::make(),
        ])
        ->bulkActions([
            Tables\Actions\DeleteBulkAction::make(),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPatients::route('/'),
            'create' => Pages\CreatePatient::route('/create'),
            'edit' => Pages\EditPatient::route('/{record}/edit'),
        ];
    }
}
