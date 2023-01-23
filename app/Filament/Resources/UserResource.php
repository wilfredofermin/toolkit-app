<?php

namespace App\Filament\Resources;

use Filament\Forms;
use App\Models\User;
use Filament\Tables;
use Filament\Resources\Form;
use Filament\Resources\Table;
use Filament\Resources\Resource;
use Filament\Tables\Actions\Action;
use Illuminate\Database\Eloquent\Builder;
use App\Filament\Resources\UserResource\Pages;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use App\Filament\Resources\UserResource\RelationManagers;

class UserResource extends Resource
{
    protected static ?string $model = User::class;

    protected static ?string $navigationIcon = 'heroicon-o-users';

    protected static ?int $navigationSort = 1;

    protected static ?string $navigationGroup = 'Configuracion';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->maxLength(255),

                Forms\Components\TextInput::make('username')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('initials')
                    ->maxLength(255),
                Forms\Components\TextInput::make('cn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('sn')
                    ->maxLength(255),
                Forms\Components\TextInput::make('givenname')
                    ->maxLength(255),

                Forms\Components\TextInput::make('email')
                    ->email()
                    ->maxLength(255),

                Forms\Components\TextInput::make('telephonenumber')
                    ->tel()
                    ->maxLength(255),
                Forms\Components\TextInput::make('description')
                    ->maxLength(255),

                Forms\Components\TextInput::make('department')
                    ->maxLength(255),
                Forms\Components\TextInput::make('useraccountcontrol')
                    ->maxLength(255),
    
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('username'),
                Tables\Columns\TextColumn::make('initials'),
                Tables\Columns\TextColumn::make('cn'),
                Tables\Columns\TextColumn::make('sn'),
                Tables\Columns\TextColumn::make('givenname'),
                Tables\Columns\TextColumn::make('email'),
                Tables\Columns\TextColumn::make('userprincipalname'),
                Tables\Columns\TextColumn::make('telephonenumber'),
                Tables\Columns\TextColumn::make('description'),
                Tables\Columns\TextColumn::make('title'),
                Tables\Columns\TextColumn::make('department'),
                Tables\Columns\TextColumn::make('useraccountcontrol'),
                Tables\Columns\TextColumn::make('supervisor'),
                Tables\Columns\TextColumn::make('physicaldeliveryofficename'),
                Tables\Columns\TextColumn::make('company'),
                Tables\Columns\TextColumn::make('user_template'),
                Tables\Columns\TextColumn::make('manager'),
                Tables\Columns\TextColumn::make('lockouttime'),
                Tables\Columns\TextColumn::make('whencreated'),
                Tables\Columns\TextColumn::make('whenchanged'),
                Tables\Columns\TextColumn::make('pwdlastset'),
                Tables\Columns\TextColumn::make('lastlogontimestamp'),
                Tables\Columns\TextColumn::make('lastlogoff'),
                Tables\Columns\TextColumn::make('logoncount'),
                Tables\Columns\TextColumn::make('badpwdcount'),
                Tables\Columns\TextColumn::make('msexcharchivename'),
                Tables\Columns\TextColumn::make('profile_photo_path'),
                Tables\Columns\TextColumn::make('current_team_id'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public function test(){
        
        dd('llegue');
    
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageUsers::route('/'),
        ];
    }    
}
