<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Especificacao extends Model
{
    use HasFactory;

    protected $fillable = [
        'especificacao',
        'caracteristica_id',
    ];

    public function caracteristica()
    {
        return $this->belongsTo(Caracteristica::class);
    }
}
