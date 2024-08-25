@extends('admin.app-admin')

@section('title', 'Usuários')

@section('content')


    <h1>Usuários</h1>
    <a href="{{ route('users.create') }}" class="">
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border
     border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50
     disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white
      dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
            Criar usuários
        </button>
    </a>
@endsection
