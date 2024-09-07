@extends('admin.app-admin')

@section('title', __('Create Role'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Create Role') }}</h1>

    <x-admin.form-model
        action="{{ route('roles.store') }}"
        method="post"
    >
        @csrf
        @method('POST')
        @include('admin.roles.partials.form-roles')
    </x-admin.form-model>

@endsection
