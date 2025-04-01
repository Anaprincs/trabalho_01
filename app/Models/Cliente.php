<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User;

class Cliente extends Model
{
    use HasFactory;
    protected $fillable = [
        'nome',
        'enderco',
        'telefone',
        'cpf'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
