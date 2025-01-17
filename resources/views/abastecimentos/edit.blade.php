<x-app-layout>
    <h1>Editar Abastecimento</h1>
    <form action="{{ route('abastecimentos.update', $abastecimento->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Veículo</label>
        <input type="text" name="veiculo" value="{{ $abastecimento->veiculo }}" required>
        <label>Litros</label>
        <input type="number" name="litros" value="{{ $abastecimento->litros }}" step="0.01" required>
        <label>Km Rodados</label>
        <input type="number" name="km_rodados" value="{{ $abastecimento->km_rodados }}" step="0.01" required>
        <label>Km/L</label>
        <input type="number" name="km_l" value="{{ $abastecimento->km_l }}" step="0.01" required>
        <label>Valor Total</label>
        <input type="number" name="valor_total" value="{{ $abastecimento->valor_total }}" step="0.01" required>
        <label>Data</label>
        <input type="date" name="data_abastecimento" value="{{ $abastecimento->data_abastecimento }}" required>
        <button type="submit">Salvar</button>
    </form>
</x-app-layout>