<x-app-layout>
    <h1>Editar Veiculo</h1>
    <form action="{{ route('veiculos.update', $veiculo->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Placa</label>
        <input type="text" name="placa" value="{{ $veiculo->placa }}" required>
        <label>Modelo</label>
        <input type="text" name="modelo" value="{{ $veiculo->modelo }}" step="0.01" required>
        <label>Filial</label>
        <input type="text" name="filial" value="{{ $veiculo->filial }}" step="0.01" required>
        <button type="submit">Salvar</button>
    </form>
</x-app-layout>