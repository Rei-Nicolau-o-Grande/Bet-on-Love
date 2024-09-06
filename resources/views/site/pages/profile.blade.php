@extends('site.app-site')

@section('title',  __('Profile'))

@section('content')
    <div class="sm:container sm:mx-auto">
        <h1 class="text-2xl font-bold my-4 text-center">{{ __('Profile') }}</h1>
        <x-site.tab>
            <x-slot:user>
                <x-site.user :user="$user" />
            </x-slot:user>
            <x-slot:tickets>
                <x-site.tickets />
            </x-slot:tickets>
            <x-slot:settings>
                <x-site.settings :settings="$user" />
            </x-slot:settings>
        </x-site.tab>
    </div>

@endsection
