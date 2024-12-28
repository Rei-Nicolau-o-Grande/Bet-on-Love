@extends('site.app-site')

@section('title',' - Post - ' . $post->code)

@section('content')
    <x-global.alert />
    <h1 class="text-4xl text-center my-3">{{ $post->title }}</h1>

    <div class="max-w-4xl mx-auto bg-white p-4 rounded shadow-lg">
        <h2 class="font-bold text-2xl mb-2 text-gray-800">{{ $post->title }}</h2>
        <p class="text-gray-600 mb-4">
            {{ $post->content }}
        </p>
        <div class="flex items-center justify-between">
            <span class="text-sm font-medium text-gray-500">
                Status: <span class="text-gray-700 font-bold">{{ __($post->status_post) }}</span>
            </span>
            <span class="text-sm font-medium text-gray-500">
                Código: <span class="text-gray-700 font-bold">{{ $post->code }}</span>
            </span>
        </div>
        <div class="flex items-center justify-between mt-4">
            <span class="text-gray-700">
                {{ $post->created_at->diffForHumans() }}
            </span>
        </div>
        <div class="mt-4 flex justify-between items-center">
            <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
{{--                {{ $post->amount != null ? 'R$ ' . number_format($post->amount, 2, ',', '.') : 'Nada ainda' }}--}}
                {{ $post->formatted_amount }}
            </span>
            <x-site.modal_create_ticket
                :post="$post"
            />
            <a href="{{ route('listPosts') }}"
               class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-full hover:bg-blue-600">
                {{ __('Back') }}
            </a>
        </div>
    </div>

    <h1 class="text-4xl text-center my-3">Tickets</h1>
    <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-6 gap-4">
        @foreach($userTickets as $ticket)
            <x-site.card_ticket :ticket="$ticket" />
        @endforeach
    </div>
@endsection
