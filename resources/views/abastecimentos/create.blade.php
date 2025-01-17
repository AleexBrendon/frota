@extends('layouts.app')

@section('content')
<h1>Adicionar Abastecimento</h1>
<form action="{{ route('abastecimentos.store') }}" method="POST">
    @csrf
    <label>Veículo</label>
    <input type="text" name="veiculo" required>
    <label>Litros</label>
    <input type="number" name="litros" step="0.01" required>
    <label>Valor Total</label>
    <input type="number" name="valor_total" step="0.01" required>
    <label>Data</label>
    <input type="date" name="data_abastecimento" required>
    <button type="submit">Salvar</button>
</form>
@endsection
@extends('layouts.app')

@section('content')
<h1>Adicionar Abastecimento</h1>
<form action="{{ route('abastecimentos.store') }}" method="POST">
    @csrf
    <label>Veículo</label>
    <input type="text" name="veiculo" required>
    <label>Litros</label>
    <input type="number" name="litros" step="0.01" required>
    <label>Valor Total</label>
    <input type="number" name="valor_total" step="0.01" required>
    <label>Data</label>
    <input type="date" name="data_abastecimento" required>
    <button type="submit">Salvar</button>
</form>
@endsection
