<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Motorista extends Model
{
    use HasFactory;

    protected $fillable = [
        'id',
        'name',
        'num_cnh',
        'categoria_cnh',
        'data_nasc',
        'status',
    ];
}
