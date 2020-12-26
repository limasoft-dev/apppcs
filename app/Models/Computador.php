<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Computador extends Model
{
    use HasFactory;

    protected $fillable = [
        'limasoft',
        'serialnr',
        'marca_id',
        'recondicionado',
        'tipo_id',
        'modelo_id',
        'so',
        'sokey',
        'fornecedor_id',
        'faturac',
        'datafaturac',
        'cliente_id',
        'faturav',
        'datafaturav',
        'obs',
    ];
}
