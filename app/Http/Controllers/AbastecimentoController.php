<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Abastecimento;

class AbastecimentoController extends Controller
{

    public function index()
    {
        $abastecimentos = Abastecimento::all();
        return view('abastecimentos.index', compact('abastecimentos'));
    }

    public function create()
    {
        return view('abastecimentos.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'veiculo' => 'required|string|max:255',
            'litros' => 'required|numeric',
            'valor_total' => 'required|numeric',
            'data_abastecimento' => 'required|date',
        ]);

        Abastecimento::create($validated);
        return redirect()->route('abastecimentos.index')->with('success', 'Abastecimento adicionado com sucesso!');
    }

    public function edit(Abastecimento $abastecimento)
    {
        return view('abastecimentos.edit', compact('abastecimento'));
    }

    public function update(Request $request, Abastecimento $abastecimento)
    {
        $validated = $request->validate([
            'veiculo' => 'required|string|max:255',
            'litros' => 'required|numeric',
            'valor_total' => 'required|numeric',
            'data_abastecimento' => 'required|date',
        ]);

        $abastecimento->update($validated);
        return redirect()->route('abastecimentos.index')->with('success', 'Abastecimento atualizado com sucesso!');
    }

    public function destroy(Abastecimento $abastecimento)
    {
        $abastecimento->delete();
        return redirect()->route('abastecimentos.index')->with('success', 'Abastecimento excluído com sucesso!');
    }
}
