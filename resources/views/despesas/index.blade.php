<x-app-layout>
    <div class="max-w-full mx-auto px-5 py-4">
        <div class="relative flex flex-col w-full h-full text-slate-700 bg-white shadow-md rounded-xl bg-clip-border">
            <div class="relative mx-4 mt-4 overflow-hidden text-slate-700 bg-white rounded-none bg-clip-border">
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold text-slate-800">Despesas - Frota Idealnet</h3>
                        <p class="text-slate-500">Despesas Realizadas</p>
                    </div>
                    <div class="shrink-0">
                        <a href="{{ route('despesas.create') }}">
                            <button class="flex select-none items-center gap-2 rounded bg-slate-800 py-2.5 px-4 text-xs font-semibold text-white shadow-md shadow-slate-900/10 transition-all hover:shadow-lg hover:shadow-slate-900/20 focus:opacity-[0.85] focus:shadow-none active:opacity-[0.85] active:shadow-none disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none" type="button">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-newspaper" viewBox="0 0 16 16">
                                    <path d="M0 2.5A1.5 1.5 0 0 1 1.5 1h11A1.5 1.5 0 0 1 14 2.5v10.528c0 .3-.05.654-.238.972h.738a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 1 1 0v9a1.5 1.5 0 0 1-1.5 1.5H1.497A1.497 1.497 0 0 1 0 13.5zM12 14c.37 0 .654-.211.853-.441.092-.106.147-.279.147-.531V2.5a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0-.5.5v11c0 .278.223.5.497.5z" />
                                    <path d="M2 3h10v2H2zm0 3h4v3H2zm0 4h4v1H2zm0 2h4v1H2zm5-6h2v1H7zm3 0h2v1h-2zM7 8h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2zm-3 2h2v1H7zm3 0h2v1h-2z" />
                                </svg>
                                Add Despesa
                            </button>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Barra de Busca e Filtro de Pagamento -->
            <div class="flex justify-between p-4">
                <div class="w-full md:w-1/2">
                    <input type="text" id="search" class="w-full p-2 border border-slate-300 rounded" placeholder="Buscar por NF, Filial ou Modelo">
                </div>
                <div class="w-full md:w-1/4">
                    <select id="payment-filter" class="w-full p-2 border border-slate-300 rounded">
                        <option value="">Todos Pagamentos</option>
                        <option value="PENDENTE">Pendente</option>
                        <option value="EFETUADO">Efetuado</option>
                    </select>
                </div>
            </div>

            <div class="p-0 overflow-x-auto">
                <table class="w-full mt-4 text-left table-auto min-w-max">
                    <thead>
                        <tr>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">NF-s</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Filial</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Modelo</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Tipo</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Valor</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Fornecedor</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Pagamento</th>
                            <th class="p-4 transition-colors cursor-pointer border-y border-slate-200 bg-slate-50 hover:bg-slate-100 text-center">Opções</th>
                        </tr>
                    </thead>
                    <tbody id="despesa-table">
                        @foreach ($despesas as $despesa)
                        <tr>
                            <td class="p-4 border-b border-slate-200 text-center">{{ $despesa->nfs }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">{{ $despesa->filial }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">{{ $despesa->modelo }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">{{ $despesa->tipo }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">{{ $despesa->valor_total }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">{{ $despesa->fornecedor }}</td>
                            <td class="p-4 border-b border-slate-200 text-center uppercase">
                                <p class="@if($despesa->pagamento == 'PENDENTE') bg-red-500 text-white rounded-lg @elseif($despesa->pagamento == 'EFETUADO') bg-green-500 text-white rounded-lg @endif">{{ $despesa->pagamento }}</p>
                            </td>
                            <td class="border-b border-slate-200">
                                <div class="flex items-center justify-center gap-2">
                                    <a href="{{ route('despesas.edit', $despesa->id) }}">
                                        <button class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="w-4 h-4">
                                                <path d="M21.731 2.269a2.625 2.625 0 00-3.712 0l-1.157 1.157 3.712 3.712 1.157-1.157a2.625 2.625 0 000-3.712zM19.513 8.199l-3.712-3.712-12.15 12.15a5.25 5.25 0 00-1.32 2.214l-.8 2.685a.75.75 0 00.933.933l2.685-.8a5.25 5.25 0 002.214-1.32L19.513 8.2z"></path>
                                            </svg>
                                        </button>
                                    </a>

                                    <!-- Formulário de exclusão com confirmação -->
                                    <form action="{{ route('despesas.destroy', $despesa->id) }}" method="POST" onsubmit="return confirm('Tem certeza que deseja excluir essa despesa?')">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5m3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0z"></path>
                                                <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4zM2.5 3h11V2h-11z"></path>
                                            </svg>
                                        </button>
                                    </form>
                                    <!-- Link para visualizar e baixar o arquivo -->
                                    @if ($despesa->arquivo)
                                    <a href="{{ route('despesas.show', $despesa->id) }}" target="_blank">
                                        <button class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0" />
                                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z" />
                                            </svg>
                                        </button>
                                    </a>
                                    <a href="{{ route('despesas.download', $despesa->id) }}">
                                        <button class="relative h-10 max-h-[40px] w-10 max-w-[40px] select-none rounded-lg text-center align-middle font-sans text-xs font-medium uppercase text-slate-900 transition-all hover:bg-slate-900/10 active:bg-slate-900/20 flex justify-center items-center">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-download" viewBox="0 0 16 16">
                                                <path d="M.5 9.9a.5.5 0 0 1 .5.5v2.5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1v-2.5a.5.5 0 0 1 1 0v2.5a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2v-2.5a.5.5 0 0 1 .5-.5" />
                                                <path d="M7.646 11.854a.5.5 0 0 0 .708 0l3-3a.5.5 0 0 0-.708-.708L8.5 10.293V1.5a.5.5 0 0 0-1 0v8.793L5.354 8.146a.5.5 0 1 0-.708.708z" />
                                            </svg>
                                        </button>
                                    </a>
                                    @else
                                    <p class="text-red-500">Nenhum arquivo anexado</p>
                                    @endif
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script>
        // Barra de busca
        document.getElementById("search").addEventListener("input", function() {
            let searchQuery = this.value.toLowerCase();
            let rows = document.querySelectorAll("#despesa-table tr");

            rows.forEach(row => {
                let cells = row.querySelectorAll("td");
                let rowText = Array.from(cells).map(cell => cell.textContent.toLowerCase()).join(" ");
                row.style.display = rowText.includes(searchQuery) ? "" : "none";
            });
        });

        // Filtro de pagamento
        document.getElementById("payment-filter").addEventListener("change", function() {
            let filterValue = this.value;
            let rows = document.querySelectorAll("#despesa-table tr");

            rows.forEach(row => {
                let paymentStatus = row.cells[5].textContent.trim();
                row.style.display = filterValue === "" || paymentStatus === filterValue ? "" : "none";
            });
        });
    </script>
</x-app-layout>