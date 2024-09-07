@extends('admin.app-admin')

@section('title', __('Edit Role'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Edit Role') }}</h1>

    <x-admin.form-model
        action="{{ route('roles.update', $role) }}"
        method="post"
    >
        @csrf
        @method('PUT')
        @include('admin.roles.partials.form-roles')
    </x-admin.form-model>

@endsection
