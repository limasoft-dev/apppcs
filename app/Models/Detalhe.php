<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detalhe extends Model
{
    use HasFactory;

    protected $fillable = [
        'computador_id',
        'caracteristica_id',
        'especificacao_id',
    ];
}
