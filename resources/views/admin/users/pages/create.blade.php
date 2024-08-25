@extends('admin.app-admin')

@section('title', 'Criar Usuário')

@section('content')
    <h1 class="">{{ __('Create User') }}</h1>
    <a href="{{ route('users.index') }}" class="">
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
            Voltar
        </button>
    </a>

    @include('admin.users.partials.form-users')

@endsection
