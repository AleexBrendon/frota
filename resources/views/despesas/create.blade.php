<x-app-layout>
    <div class="bg-gray-100 py-6 flex flex-col justify-center sm:py-4 dark:text-white">
        <div class="relative sm:max-w-xl sm:mx-auto">
            <div class="relative px-4 py-10 bg-white mx-8 md:mx-0 shadow rounded-3xl sm:p-10">
                <div class="max-w-md mx-auto">
                    <div class="flex justify-end items-end top-1">
                        <a href="/despesas" class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-x-lg" viewBox="0 0 16 16">
                                <path d="M2.146 2.854a.5.5 0 1 1 .708-.708L8 7.293l5.146-5.147a.5.5 0 0 1 .708.708L8.707 8l5.147 5.146a.5.5 0 0 1-.708.708L8 8.707l-5.146 5.147a.5.5 0 0 1-.708-.708L7.293 8z" />
                            </svg>
                        </a>
                    </div>
                    <div class="flex items-center space-x-5">
                        <div class="h-14 w-14 bg-yellow-200 rounded-full flex flex-shrink-0 justify-center items-center text-yellow-500 text-2xl font-mono">i</div>
                        <div class="block pl-2 font-semibold text-xl self-start text-gray-700">
                            <h2 class="leading-relaxed">Despesas Veículares</h2>
                            <p class="text-sm text-gray-500 font-normal leading-relaxed">Preencha os campos com os dados para adicionar uma despesa!</p>
                        </div>
                    </div>
                    <div class="divide-y divide-gray-200">
                        <div class="py-4 text-base leading-6 space-y-4 text-gray-700 sm:text-lg sm:leading-7">
                            <form action="{{ route('despesas.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Número da NF-s</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="nfs" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Filial</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="filial" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Modelo do Veículo</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="modelo" step="0.01" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Veículo</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="text" name="veiculo" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Tipo de Despesa</label>
                                    <input type="text" name="tipo" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Condutor</label>
                                    <input type="text" name="condutor" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Fornecedor</label>
                                    <input type="text" name="fornecedor" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Descrição</label>
                                    <input type="text" name="descricao" step="0.01" class="px-4 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                </div>
                                <div class="flex items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Valor da Nota R$</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="valor_produto" step="0.01" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Valor do Produto R$</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="number" name="valor_total" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-center items-center space-x-4">
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Data de Emissão</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="date" name="data_emissao" step="0.01" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                    <div class="flex flex-col">
                                        <label class="leading-loose text-sm">Data do Pagamento</label>
                                        <div class="relative focus-within:text-gray-600 text-gray-400">
                                            <input type="date" name="data_pagamento" class="pr-4 pl-10 py-2 border focus:ring-gray-500 focus:border-gray-900 w-full sm:text-sm border-gray-300 rounded-md focus:outline-none text-gray-600">
                                        </div>
                                    </div>
                                </div>
                                <div class="flex flex-col">
                                    <label class="leading-loose text-sm">Pagamento</label>
                                    <svg class="w-2 h-2 absolute top-0 right-0 m-4 pointer-events-none" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 412 232">
                                        <path d="M206 171.144L42.678 7.822c-9.763-9.763-25.592-9.763-35.355 0-9.763 9.764-9.763 25.592 0 35.355l181 181c4.88 4.882 11.279 7.323 17.677 7.323s12.796-2.441 17.678-7.322l181-181c9.763-9.764 9.763-25.592 0-35.355-9.763-9.763-25.592-9.763-35.355 0L206 171.144z" fill="#648299" fill-rule="nonzero" />
                                    </svg>
                                    <select name="pagamento" class="border border-gray-300 rounded-md text-gray-600 h-10 pl-5 pr-10 bg-white hover:border-gray-400 focus:outline-none appearance-none">
                                        <option value="PENDENTE">PENDENTE</option>
                                        <option value="EFETUADO">EFETUADO</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="arquivo" class="leading-loose text-sm">Anexar Arquivo (PDF ou Imagem)</label>
                                    <input type="file" name="arquivo" id="arquivo" class="form-control pr-4 pl-10 py-2 focus:ring-gray-500 w-full sm:text-sm rounded-md focus:outline-none text-gray-600" accept="image/*,.pdf">
                                </div>

                                <div class="pt-6">
                                    <button type="submit" class="flex justify-center items-center w-full gap-2 rounded border border-[#7629c8] px-4 py-3 text-sm font-semibold text-[#7629c8] transition-all hover:bg-[#7629c8] hover:text-white hover:shadow-lg active:scale-95 disabled:pointer-events-none disabled:opacity-50 disabled:shadow-none">Salvar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>