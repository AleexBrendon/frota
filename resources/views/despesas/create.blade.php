<x-app-layout>
    <div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-4 dark:text-white">
        <div class="relative sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Despesas Veículares</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Preencha os campos com os dados para adicionar uma despesa!</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form action="{{ route('despesas.store') }}" method="POST">
                                @csrf
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Número da NF-s</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="nfs" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome do Técnico">
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
                                        <label class="leading-loose text-sm">Modelo do Veículo</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="litros" step="0.01" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quantidade de Litros">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Veículo</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="km_rodados" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quilômetro Rodado">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Tipo de Despesa</label>
                                    <input type="number" name="valor_total" step="0.01" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Condutor</label>
                                    <input type="number" name="valor_total" step="0.01" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Fornecedor</label>
                                    <input type="number" name="valor_total" step="0.01" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Descrição</label>
                                    <input type="number" name="valor_total" step="0.01" required class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="KM">
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Valor da Nota R$</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="litros" step="0.01" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quantidade de Litros">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Valor do Produto R$</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="km_rodados" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quilômetro Rodado">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Data de Emissão</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="litros" step="0.01" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quantidade de Litros">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Data do Pagamento</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="km_rodados" required class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Quilômetro Rodado">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col pb-5">
                                    <label class="leading-loose text-sm">Pagamento</label> dropdown
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