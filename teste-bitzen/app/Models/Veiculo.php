<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Veiculo extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'placa',
        'name_veiculo',
        'tipo_combustivel',
        'fabricante',
        'ano_fabricacao',
        'capacidade',
        'observacao',
    ];
}
