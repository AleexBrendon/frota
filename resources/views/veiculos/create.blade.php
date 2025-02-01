<x-app-layout>
    <div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-4 dark:text-white">
        <div class="relative sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Veiculo</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Preencha os campos com os dados para adicionar um abastecimento.</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form action="{{ route('veiculos.store') }}" method="POST">
                                @csrf
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm text-sm">Placa</label>
                                    <input type="text" name="placa" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Placa do veículo" required>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm text-sm">Filial</label>
                                    <input type="text" name="filial" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Filial do veículo" required>
                                </div>
                                <div class="flex items-center space-x-4 pb-5">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Modelo</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="modelo" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Modelo do veículo">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Marca</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="marca" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600" placeholder="Nome da Marca">
                                        </div>
                                    </div>
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