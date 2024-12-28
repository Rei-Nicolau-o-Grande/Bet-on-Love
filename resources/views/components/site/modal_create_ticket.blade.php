<button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-green-200 bg-green-600 text-white shadow-sm hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none" aria-haspopup="dialog" aria-expanded="false" aria-controls="hs-basic-modal" data-hs-overlay="#hs-basic-modal">
    Fazer a Bet
</button>

<div id="hs-basic-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[60] overflow-x-hidden overflow-y-auto pointer-events-none" role="dialog" tabindex="-1" aria-labelledby="hs-basic-modal-label">
    <div class="hs-overlay-open:opacity-100 hs-overlay-open:duration-500 opacity-0 transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
        <div class="flex flex-col bg-white border shadow-sm rounded-xl pointer-events-auto">
            <div class="flex justify-between items-center py-3 px-4 border-b">
                <h3 id="hs-basic-modal-label" class="font-bold text-gray-800">
                    Modal Form
                </h3>
                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none" aria-label="Close" data-hs-overlay="#hs-basic-modal">
                    <span class="sr-only">Close</span>
                    <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18"></path>
                        <path d="m6 6 12 12"></path>
                    </svg>
                </button>
            </div>
            <form class="p-4 overflow-y-auto" action="{{ route('createTicket', $post->id) }}" method="post">
                @csrf
                @method('POST')
                <div class="mb-4">
                    <label for="value" class="block text-sm font-medium text-gray-700">{{ __('Value') }}</label>
                    <input type="text" name="value" id="value" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
                    @error('value')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>
                <div class="mb-4">
                    <label for="end_date" class="block text-sm font-medium text-gray-700">{{ __('End Date') }}</label>
                    <input type="datetime-local" name="end_date" id="end_date" class="mt-1 block w-full px-3 py-2 border border-gray-300 rounded-md shadow-sm focus:ring-green-500 focus:border-green-500 sm:text-sm" required>
                    @error('end_date')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                    @enderror
                </div>

                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t">
                    <button type="button" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-red-600 text-white shadow-sm hover:bg-red-700 focus:outline-none focus:bg-gray-50 disabled:opacity-50 disabled:pointer-events-none" data-hs-overlay="#hs-basic-modal">
                        {{ __('Cancel') }}
                    </button>
                    <button type="submit" class="py-2 px-3 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-green-600 text-white hover:bg-green-700 focus:outline-none focus:bg-green-700 disabled:opacity-50 disabled:pointer-events-none">
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('value').addEventListener('input', function (e) {
        let value = e.target.value.replace(/[^0-9]/g, ''); // Remove caracteres não numéricos

        // Garante que o campo fique vazio se nada for digitado
        if (value.length === 0) {
            e.target.value = '';
            return;
        }

        // Remove zeros à esquerda
        value = value.replace(/^0+/, '');

        // Divide o valor em parte inteira e decimal
        let integerPart = value.slice(0, value.length - 2) || '0'; // Parte inteira
        let decimalPart = value.slice(-2); // Últimos dois dígitos

        // Formata a parte inteira com separadores de milhares
        integerPart = new Intl.NumberFormat('pt-BR').format(parseInt(integerPart, 10));

        // Concatena a parte inteira formatada com a parte decimal
        value = `${integerPart}.${decimalPart}`;

        // Atualiza o campo com o valor formatado
        e.target.value = value;
    });
</script>

