<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Postagens extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nome',
        'etapa',
        'valor',
        'email',
        'telefone',
        'categoria',
        'flag',
        'arquivo',
        'id_user_create',
        'id_user_up',
        'id_user_disable'
    ];

    public function anexos():BelongsToMany
    {
        return $this->belongsToMany(Anexos::class);
    }

    public function usuarios():BelongsToMany
    {
        return $this->belongsToMany(Users::class, 'id_users', 'id');
    }
}