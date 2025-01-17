<x-app-layout>
    <div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-4 dark:text-white">
        <div class="relative sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Abastecimento</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Preencha os campos com os dados para adicionar um abastecimento.</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form action="{{ route('abastecimentos.store') }}" method="POST">
                                @csrf
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm text-sm">Veículo</label>
                                    <input type="text" name="veiculo" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Placa do veículo" required>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Condutor</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="condutor" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome do Técnico">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Filial</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="filial" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome da Filial">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Litros</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="litros" step="0.01" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quantidade de Litros">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Km Rodados</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="km_rodados" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quilômetro Rodado">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Valor Total</label>
                                    <input type="number" name="valor_total" step="0.01" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Data do Abastecimento</label>
                                    <div class="relative focus-within:text-gray-600 text-gray-400">
                                        <input type="date" name="data_abastecimento" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        <div class="absolute left-3 top-2">
                                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path>
                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col pb-5">
                                    <label class="leading-loose text-sm">Odômetro</label>
                                    <input type="number" name="odometro" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <button type="submit" class="flex justify-center items-center w-full gap-2 rounded border border-[#7629c8] px-4 py-3 text-sm font-semibold text-[#7629c8] transition-all hover:bg-[#7629c8] hover:text-white hover:shadow-lg active:scale-95 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Salvar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>