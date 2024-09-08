@extends('site.app-site')

@section('title',  __('Profile'))

@section('content')
    <x-global.alert />
    <div class="sm:container sm:mx-auto">
        <h1 class="text-2xl font-bold my-4 text-center">{{ __('Settings') }}</h1>
        <x-site.nav />
        <x-site.card-tab>
            <h3>{{ __('Voce estar ciente que estar desativando sua conta.') }}</h3>
            <p>{{ __('Ao desativar sua conta, você não poderá mais acessar o sistema.') }}</p>
            <p>{{ __('Se você deseja reativar sua conta, entre com seu email e senha.') }}</p>
            <form action="{{ route('profile.destroy', $user) }}" method="post" class="my-2"
                  onsubmit="return confirm('{{ __('Are you sure you want to disable your account?') }}')"
            >
                @csrf
                @method('DELETE')
                <button type="submit" class="bg-red-600 hover:bg-red-800 rounded-lg text-white px-2 py-2">{{ __('Disable') }}</button>
            </form>
        </x-site.card-tab>
    </div>

@endsection
