@extends('site.app-site')

@section('title',  __('Profile'))

@section('content')
    <x-global.alert />
    <div class="sm:container sm:mx-auto">
        <h1 class="text-2xl font-bold my-4 text-center">{{ __('Profile') }}</h1>
        <x-site.nav />
        <x-site.card-tab>
            <p><strong>Username:</strong> {{ $user->username }}</p>
            <p><strong>Email:</strong> {{ $user->email }}</p>
        </x-site.card-tab>
    </div>
@endsection
