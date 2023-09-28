<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Warehouse extends Model
{
    use HasFactory;

    protected $table = 'warehouses';

    protected $fillable = [
        'nome',
        'localizacao',
        'capacidade',
        'largura',
        'altura',
        'descricao',
        'status',
    ];
}
