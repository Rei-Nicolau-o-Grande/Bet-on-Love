@extends('admin.app-admin')

@section('title', __('Create User'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Create User') }}</h1>

    <x-admin.form-model
        action="{{ route('users.store') }}"
        method="post"
    >
        @csrf
        @method('POST')
        @include('admin.users.partials.form-users')
    </x-admin.form-model>

@endsection
