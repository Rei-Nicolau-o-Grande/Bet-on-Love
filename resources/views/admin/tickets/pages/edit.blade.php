@extends('admin.app-admin')

@section('title', __('Edit Ticket'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Edit Ticket') }}</h1>

    <x-admin.form-model
        action="{{ route('tickets.update', $ticket) }}"
        method="post"
    >
        @csrf
        @method('PUT')
        @include('admin.tickets.partials.form-tickets')
    </x-admin.form-model>
@endsection
