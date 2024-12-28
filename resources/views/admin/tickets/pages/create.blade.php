@extends('admin.app-admin')

@section('title', __('Create Ticket'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Create Ticket') }}</h1>

    <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-full border border-transparent bg-red-600 text-white hover:bg-red-700 focus:outline-none focus:bg-red-700 disabled:opacity-50 disabled:pointer-events-none">
        <a href="{{ route("tickets.index") }}" class="text-white">Voltar</a>
    </button>


{{--    <x-admin.form-model--}}
{{--        action="{{ route('tickets.store') }}"--}}
{{--        method="post"--}}
{{--    >--}}
{{--        @csrf--}}
{{--        @method('POST')--}}
{{--        @include('admin.tickets.partials.form-tickets')--}}
{{--    </x-admin.form-model>--}}
@endsection
