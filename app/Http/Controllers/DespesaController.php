<?php

namespace App\Http\Controllers;
use App\Models\Despesa;
use Illuminate\Http\Request;

class DespesaController extends Controller
{
    public function index()
    {
        $despesas = Despesa::all();
        return view('despesas.index', compact('despesas'));
    }

    public function create()
    {
        return view('despesas.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nfs' => 'required|string|max:255',
            'filial' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'veiculo' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'condutor' => 'required|string|max:255',
            'fornecedor' => 'required|string|max:255',
            'descricao' => 'required|string|max:255',
            'valor_produto' => 'required|numeric',
            'valor_total' => 'required|numeric',
            'data_emissao' => 'required|date',
            'data_pagamento' => 'required|date',
            'pagamento' => 'required|numeric',
        ]);

        Despesa::create($validated);
        return redirect()->route('despesas.index')->with('Despesa adicionada com sucesso!');
    }
}
