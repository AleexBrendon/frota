<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abastecimento extends Model
{
    use HasFactory;

    protected $fillable = ['veiculo',  'condutor',  'filial', 'litros', 'km_rodados', 'valor_total', 'data_abastecimento', 'odometro'];
}
