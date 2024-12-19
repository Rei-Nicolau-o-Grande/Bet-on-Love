@extends('site.app-site')

@section('title', __('Tickets'))

@section('content')
    <x-global.alert />
    <h1 class="text-4xl text-center my-3">{{ __('Your Tickets') }}</h1>

    <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-6 gap-4">
        @foreach($userTickets as $ticket)
            <x-site.card_ticket :ticket="$ticket" />
        @endforeach
    </div>

    <div class="my-5 mx-5 justify-items-end">
        {{ $userTickets->links() }}
    </div>
@endsection
