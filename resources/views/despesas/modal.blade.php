<!-- resources/views/modal.blade.php -->
<div id="myModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
    <div class="bg-white p-8 rounded-lg w-96">
        <div class="flex justify-between items-center">
            <h3 class="text-xl font-semibold">Título do Modal</h3>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700">
                &times;
            </button>
        </div>
        <div class="mt-4">
            <p>Conteúdo do Modal.</p>
        </div>
        <div class="mt-4 flex justify-end">
            <button id="closeModalBtn" class="bg-gray-300 text-black px-4 py-2 rounded-md">Fechar</button>
            <button class="bg-blue-500 text-white px-4 py-2 ml-2 rounded-md">Salvar alterações</button>
        </div>
    </div>
</div>

<script>
    // Acessa o modal e os botões de controle
    const modal = document.getElementById('myModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtns = document.querySelectorAll('#closeModal, #closeModalBtn');

    // Abre o modal
    if (openModalBtn) {
        openModalBtn.addEventListener('click', () => {
            modal.classList.remove('hidden');
        });
    }

    // Fecha o modal
    closeModalBtns.forEach(btn => {
        btn.addEventListener('click', () => {
            modal.classList.add('hidden');
        });
    });
</script>
