@extends('site.app-site')

@section('title',  __('Edit Profile'))

@section('content')
    <x-global.alert />
    <div class="sm:container sm:mx-auto">
        <h1 class="text-2xl font-bold my-4 text-center">{{ __('Edit Profile') }}</h1>
        <x-site.nav />
        <x-site.card-tab>
            <x-admin.form-model
                action="{{ route('profile.update', $user) }}"
                method="post"
                onsubmit="return confirm('{{ __('Are you sure you want to update your profile?') }}')"
            >
                @csrf
                @method('PUT')
                @include('site.partials.form-edit-user')
            </x-admin.form-model>
        </x-site.card-tab>
    </div>

@endsection
