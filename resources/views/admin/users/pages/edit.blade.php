@extends('admin.app-admin')

@section('title', __('Edit User'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Edit User') }}</h1>

    <x-admin.form-model
        action="{{ route('users.update', $user) }}"
        method="post"
    >
        @csrf
        @method('PUT')
        @include('admin.users.partials.form-users')
    </x-admin.form-model>

@endsection
