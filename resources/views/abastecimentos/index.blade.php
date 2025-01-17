@extends('layouts.app')

@section('content')
<h1>Abastecimentos</h1>
<a href="{{ route('abastecimentos.create') }}">Adicionar Abastecimento</a>
<table>
    <thead>
        <tr>
            <th>Veículo</th>
            <th>Litros</th>
            <th>Valor Total</th>
            <th>Data</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($abastecimentos as $abastecimento)
            <tr>
                <td>{{ $abastecimento->veiculo }}</td>
                <td>{{ $abastecimento->litros }}</td>
                <td>{{ $abastecimento->valor_total }}</td>
                <td>{{ $abastecimento->data_abastecimento }}</td>
                <td>
                    <a href="{{ route('abastecimentos.edit', $abastecimento->id) }}">Editar</a>
                    <form action="{{ route('abastecimentos.destroy', $abastecimento->id) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit">Excluir</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
@endsection
