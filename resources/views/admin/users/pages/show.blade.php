@extends('admin.app-admin')

@section('title', $user->username)

@section('content')
    <h1 class="text-2xl text-center">{{ __('Username') }} - {{ $user->username }}</h1>

    <x-admin.card-show>
        <x-slot name="cardInformation">
            <x-admin.span-information
                :label="__('Username')"
                :value="$user->username"
            />

            <x-admin.span-information
                :label="__('Email')"
                :value="$user->email"
            />

            <x-admin.span-information
                :label="__('Email Verified')"
                :value="$user->email_verified_at ? $user->email_verified_at->diffForHumans() : __('Not Verified')"
            />

            <x-admin.span-information
                :label="__('Created At')"
                :value="$user->created_at->diffForHumans()"
            />

            <x-admin.span-information
                :label="__('Updated At')"
                :value="$user->updated_at->diffForHumans()"
            />

            <x-admin.span-information
                :label="__('Active')"
                :value="$user->active ? __('Yes') : __('No')"
            />

            <x-admin.span-information
                :label="__('Role')"
                :value="$user->roles->first()->name"
            />

            <x-admin.span-information
                :label="__('Description')"
                :value="$user->roles->first()->description"
            />
        </x-slot>

        <x-slot name="cardActionButtons">
            <x-admin.action-buttons
                :model="$user"
                :routeEdit="route('users.edit', $user->id)"
                :routeEnable="route('users.active', $user->id)"
                :routeDisable="route('users.destroy', $user->id)"
            />
        </x-slot>

    </x-admin.card-show>

    @if ($user->posts)
        <div class="mt-4">
            <h2 class="text-xl">{{ __('Posts') }}</h2>
            <ul>
                @foreach ($user->posts as $post)
                    <li>
                        <a href="">{{ $post->title }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

    @if ($user->tickets->isNotEmpty())
        <div class="mt-4">
            <h2 class="text-xl">{{ __('Tickets') }}</h2>
            <ul>
                @foreach ($user->tickets as $ticket)
                    <li>
                        <a href="">{{ $ticket->value }}</a>
                    </li>
                @endforeach
            </ul>
        </div>
    @endif

@endsection
