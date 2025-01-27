<?php

namespace App\Http\Controllers;

use App\Models\Despesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

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

    // public function store(Request $request)
    // {
    //     $validated = $request->validate([
    //         'nfs' => 'required|string|max:255',
    //         'filial' => 'required|string|max:255',
    //         'modelo' => 'required|string|max:255',
    //         'veiculo' => 'required|string|max:255',
    //         'tipo' => 'required|string|max:255',
    //         'condutor' => 'required|string|max:255',
    //         'fornecedor' => 'required|string|max:255',
    //         'descricao' => 'required|string|max:255',
    //         'valor_produto' => 'required|numeric',
    //         'valor_total' => 'required|numeric',
    //         'data_emissao' => 'required|date',
    //         'data_pagamento' => 'required|date',
    //         'pagamento' => 'required|max:255',
    //         'arquivo' => 'nullable|mimes:pdf,jpeg,png,jpg|max:10240',
    //     ]);

    //     Despesa::create($validated);

    //     return redirect()->route('despesas.index')->with('Despesa adicionada com sucesso!');
    // }

    public function store(Request $request)
    {
        // Validação do arquivo
        $request->validate([
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
            'pagamento' => 'required|max:255',
            'arquivo' => 'nullable|mimes:pdf,jpeg,png,jpg|max:30240',
        ]);

        // Criar nova despesa
        $despesa = new Despesa();
        $despesa->nfs = $request->nfs;
        $despesa->filial = $request->filial;
        $despesa->modelo = $request->modelo;
        $despesa->veiculo = $request->veiculo;
        $despesa->tipo = $request->tipo;
        $despesa->condutor = $request->condutor;
        $despesa->fornecedor = $request->fornecedor;
        $despesa->descricao = $request->descricao;
        $despesa->valor_produto = $request->valor_produto;
        $despesa->valor_total = $request->valor_total;
        $despesa->data_emissao = $request->data_emissao;
        $despesa->data_pagamento = $request->data_pagamento;
        $despesa->pagamento = $request->pagamento;
        $despesa->arquivo = $request->arquivo;

        // Verifica se existe um arquivo e armazena ele como base64 no banco
        if ($request->hasFile('arquivo')) {
            $file = $request->file('arquivo');
            $fileContent = file_get_contents($file); // Lê o conteúdo do arquivo
            $encodedFile = base64_encode($fileContent); // Codifica o conteúdo para base64

            $despesa->arquivo = $encodedFile; // Armazena o conteúdo codificado no banco de dados
        }

        // Salva os dados da despesa no banco
        $despesa->save();

        return redirect()->route('despesas.index')->with('success', 'Despesa criada com sucesso!');
    }

    public function edit(Despesa $despesa)
    {
        return view('despesas.edit', compact('despesa'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nfs' => 'required|string|max:255',
            'filial' => 'required|string|max:255',
            'modelo' => 'required|string|max:255',
            'veiculo' => 'required|string|max:255',
            'tipo' => 'required|string|max:255',
            'condutor' => 'required|string|max:255',
            'fornecedor' => 'required|string|max:255',
            'descricao' => 'nullable|string|max:255',
            'valor_produto' => 'required|numeric',
            'valor_total' => 'required|numeric',
            'data_emissao' => 'required|date',
            'data_pagamento' => 'nullable|date',
            'pagamento' => 'required|string|max:255',
        ]);
        $despesa = Despesa::findOrFail($id);

        $despesa->update($request->all());

        return redirect()->route('despesas.index')->with('success', 'Despesa atualizada com sucesso!');
    }


    public function destroy(Despesa $despesa)
    {
        $despesa->delete();
        return redirect()->route('despesas.index')->with('success', 'Despesa excluída com sucesso!');
    }

    public function show($id)
    {
        $despesa = Despesa::findOrFail($id);

        // Verifica se o arquivo existe
        if ($despesa->arquivo) {
            $fileContent = base64_decode($despesa->arquivo); // Decodifica o conteúdo do arquivo

            // Retorna o arquivo como resposta
            return response($fileContent)
                ->header('Content-Type', 'application/pdf'); // Para PDF, ou use o tipo adequado
        }

        return response()->json(['message' => 'Arquivo não encontrado.'], 404);
    }

    public function download($id)
{
    $despesa = Despesa::findOrFail($id);

    // Verifica se o arquivo existe
    if ($despesa->arquivo) {
        $fileContent = base64_decode($despesa->arquivo); // Decodifica o conteúdo do arquivo

        // Retorna o arquivo com o cabeçalho 'Content-Disposition' para forçar o download
        return response($fileContent)
                ->header('Content-Type', 'application/pdf') // Tipo de conteúdo, altere conforme necessário
                ->header('Content-Disposition', 'attachment; filename="arquivo.pdf"'); // Força o download
    }

    return response()->json(['message' => 'Arquivo não encontrado.'], 404);
}

}
