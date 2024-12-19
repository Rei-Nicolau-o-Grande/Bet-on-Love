@extends('site.app-site')

@section('title',' - Ticket - '. $ticket->code)

@section('content')
    <div class="max-w-4xl mx-auto mt-6">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden border border-gray-200">
            <div class="p-6">
                <h1 class="text-2xl font-semibold text-gray-800 mb-4">Detalhes do Ticket</h1>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Código:</p>
                    <h2 class="text-lg font-semibold text-gray-800">{{ $ticket->code }}</h2>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Data de Término:</p>
                    <p class="font-medium">{{ \Carbon\Carbon::parse($ticket->end_date)->format('d/m/Y H:i:s') }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Posição:</p>
                    <p class="font-medium">{{ __($ticket->place) }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Post:</p>
                    <p class="font-medium">
                        <a class="text-blue-800 hover:text-indigo-900 underline" href="{{ route('showPost', $ticket->post->code) }}">
                            {{ __(Str::limit($ticket->post->title, 30)) }}
                        </a>
                    </p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Odd:</p>
                    <p class="font-medium">{{ $ticket->post->odd }}</p>
                </div>

                <div class="mb-4">
                    <p class="text-sm text-gray-600">Valor:</p>
                    <p class="font-medium">{{ number_format($ticket->value, 2, ',', '.') }}</p>
                </div>
            </div>

            <div class="px-6 py-4 bg-gray-50 text-right">
                <a href="{{ route('userTickets') }}" class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-500 transition-all">
                    Voltar
                </a>
            </div>
        </div>
    </div>
@endsection
