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
            'veiculo' => 'required|string|max:255',
            'condutor' => 'required|string|max:255',
            'filial' => 'required|string|max:255',
            'litros' => 'required|numeric',
            'km_rodados' => 'required|string|max:255',
            'valor_total' => 'required|numeric',
            'data_abastecimento' => 'required|date',
            'odometro' => 'required|string|max:255',
        ]);

        Despesa::create($validated);
        return redirect()->route('despesas.index')->with('Despesa adicionada com sucesso!');
    }
}
