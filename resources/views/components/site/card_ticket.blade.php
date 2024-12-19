<div class="max-w-sm mx-auto mt-6">
    <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
        <!-- Cabeçalho do Card -->
        <div class="p-4">
            <h2 class="text-lg font-semibold text-gray-800">{{ $ticket->code }}</h2>
            <div class="mt-2 space-y-2">
                <p class="text-sm text-gray-600">
                    <strong>Data de Término:</strong> <span>{{ $ticket->formatted_end_date }}</span>
                </p>
                <p class="text-sm text-gray-600">
                    <strong>Posição:</strong> <span>{{ __($ticket->place) }}</span>
                </p>
                <p class="text-sm text-gray-600">
                    <strong>Valor:</strong> <span>{{ $ticket->formatted_value }}</span>
                </p>
            </div>
        </div>
        <!-- Rodapé do Card -->
        <div class="px-4 py-3 bg-gray-50 flex justify-end">
            <a href="{{ route('showTicket', $ticket->code) }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition-all focus:ring focus:ring-blue-300 focus:outline-none">
                Ver Detalhes
            </a>
        </div>
    </div>
</div>
