<?php

namespace App\Filament\Resources;

use Filament\Forms;
use Filament\Tables;
use App\Models\Event;
use Filament\Forms\Form;
use Filament\Tables\Table;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Illuminate\Database\Eloquent\Builder;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Components\ImageEntry;
use App\Filament\Resources\EventResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\EventResource\RelationManagers;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-calendar-days';

   public static function form(Form $form): Form
{
    return $form
        ->schema([
            // Event Details Section
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\TextInput::make('title')
                        ->label('Event Title')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\TextInput::make('location')
                        ->label('Location')
                        ->required()
                        ->maxLength(255),
                    Forms\Components\Toggle::make('status')
                        ->label('Status')
                        ->inline(false)
                        ->onColor('success')
                        ->offColor('danger')
                        ->onIcon('heroicon-o-check')
                        ->offIcon('heroicon-o-x-circle'),
                ])
                ->label('Event Details')
                ->columns(2),

            // Date Section
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\DatePicker::make('start_date')
                        ->native(false)
                        ->label('Start Date')
                        ->required(),
                    Forms\Components\DatePicker::make('end_date')
                        ->native(false)
                        ->label('End Date'),

                ])
                ->label('Event Date')
                 ->columns(2),

            // Media Section
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\FileUpload::make('image')
                        ->disk('public')
                        ->directory('Events')
                        ->image()
                        ->label('Event Image')
                        ->required(),
                ])
                ->label('Media'),

            // Description Section
            Forms\Components\Card::make()
                ->schema([
                    Forms\Components\RichEditor::make('description')
                        ->label('Event Description')
                        ->required()
                        ->columnSpanFull(),
                ])
                ->label('Description'),
        ]);
}


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable(),
                Tables\Columns\TextColumn::make('event_date')
                    ->searchable(),
                Tables\Columns\ToggleColumn::make('status')
                    ->onColor('success')
                    ->offColor('danger')
                    ->onIcon('heroicon-o-check')
                    ->offIcon('heroicon-o-x-circle'),
                Tables\Columns\TextColumn::make('location')
                    ->searchable(),
                Tables\Columns\ImageColumn::make('image')
                    ->label('Event Image')
                    ->circular(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Event Description')
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        return $infolist
            ->schema([
                TextEntry::make('title')
                    ->label('Event Title'),

                TextEntry::make('location')
                    ->label('Location'),

                TextEntry::make('start_date')
                    ->label('Start Date'),

                TextEntry::make('end_date')
                    ->label('End Date'),
                ImageEntry::make('image')
                    ->label('Event Image'),
                TextEntry::make('description')
                    ->label('Event Description')->html(),

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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'view' => Pages\ViewEvent::route('/{record}'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}
