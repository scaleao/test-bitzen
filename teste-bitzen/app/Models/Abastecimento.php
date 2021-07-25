<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abastecimento extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'veiculo_id',
        'motorista_id',
        'tipo_combustivel',
        'quantidade',
        'valor',
    ];
}
