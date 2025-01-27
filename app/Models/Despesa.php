<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Despesa extends Model
{
    use HasFactory;

    protected $fillable = ['nfs',  'filial',  'modelo', 'veiculo', 'tipo', 'condutor', 'fornecedor', 'descricao', 'valor_produto', 'valor_total', 'data_emissao', 'data_pagamento', 'pagamento', 'arquivo'];
}
