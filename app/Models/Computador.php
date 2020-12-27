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
        'sokey',
        'fornecedor_id',
        'faturac',
        'datafaturac',
        'cliente_id',
        'faturav',
        'datafaturav',
        'obs',
    ];

    public function marca()
    {
        return $this->belongsTo(Marca::class);
    }
    public function tipo()
    {
        return $this->belongsTo(Tipo::class);
    }
    public function modelo()
    {
        return $this->belongsTo(Modelo::class);
    }
    public function fornecedor()
    {
        return $this->belongsTo(Fornecedor::class);
    }
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }
}
