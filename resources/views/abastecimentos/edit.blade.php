@extends('layouts.app')

@section('content')
<h1>Editar Abastecimento</h1>
<form action="{{ route('abastecimentos.update', $abastecimento->id) }}" method="POST">
    @csrf
    @method('PUT')
    <label>Veículo</label>
    <input type="text" name="veiculo" value="{{ $abastecimento->veiculo }}" required>
    <label>Litros</label>
    <input type="number" name="litros" value="{{ $abastecimento->litros }}" step="0.01" required>
    <label>Valor Total</label>
    <input type="number" name="valor_total" value="{{ $abastecimento->valor_total }}" step="0.01" required>
    <label>Data</label>
    <input type="date" name="data_abastecimento" value="{{ $abastecimento->data_abastecimento }}" required>
    <button type="submit">Salvar</button>
</form>
@endsection
