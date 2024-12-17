@extends('admin.app-admin')

@section('title', __('Create Ticket'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Create Ticket') }}</h1>

    <x-admin.form-model
        action="{{ route('tickets.store') }}"
        method="post"
    >
        @csrf
        @method('POST')
        @include('admin.tickets.partials.form-tickets')
    </x-admin.form-model>
@endsection
