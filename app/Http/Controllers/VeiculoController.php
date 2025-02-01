<?php

namespace App\Http\Controllers;

use App\Models\Veiculo;
use Illuminate\Http\Request;

class VeiculoController extends Controller
{
    // Exibe a lista de veículos
    public function index()
    {
        $vehicles = Veiculo::all();
        return view('veiculos.index', compact('veiculos'));
    }

    public function create()
    {
        return view('veiculos.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'placa' => 'required',
            'marca' => 'required',
            'modelo' => 'required',
            'filial' => 'required',
        ]);

        Veiculo::create($request->all());
        return redirect()->route('veiculos.index');
    }


    // Exibe o formulário para editar um veículo
    public function edit($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        return view('veiculos.edit', compact('veiculo'));
    }

    // Atualiza um veículo no banco de dados
    public function update(Request $request, $id)
    {
        $request->validate([
            'placa' => 'required|max:7',
            'modelo' => 'required|max:100',
            'marca' => 'required|max:100',
            'filial' => 'required|max:100',
        ]);

        $veiculo = Veiculo::findOrFail($id);
        $veiculo->placa = $request->placa;
        $veiculo->modelo = $request->modelo;
        $veiculo->marca = $request->marca;
        $veiculo->filial = $request->filial;
        $veiculo->save();

        return redirect()->route('veiculos.index')->with('success', 'Veículo atualizado com sucesso!');
    }

    // Exibe o formulário para confirmar a exclusão de um veículo
    public function destroy($id)
    {
        $veiculo = Veiculo::findOrFail($id);
        $veiculo->delete();

        return redirect()->route('veiculos.index')->with('success', 'Veículo excluído com sucesso!');
    }
}
