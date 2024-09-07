@extends('admin.app-admin')

@section('title', __('Roles'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Role') }} - {{ $role->name }}</h1>

    <x-admin.card-show>
        <x-slot name="cardInformation">
            <x-admin.span-information
                :label="__('Role')"
                :value="$role->name"
            />
            <x-admin.span-information
                :label="__('Created At')"
                :value="$role->created_at->diffForHumans()"
            />
            <x-admin.span-information
                :label="__('Updated At')"
                :value="$role->updated_at->diffForHumans()"
            />
            <x-admin.span-information
                :label="__('Active')"
                :value="$role->is_active ? __('Yes') : __('No')"
            />
            <x-admin.span-information
                :label="__('Description')"
                :value="$role->description"
            />
        </x-slot>

        <x-slot name="cardActionButtons">
            <x-admin.action-buttons
                :model="$role"
                :routeEdit="route('roles.edit', $role->id)"
                :routeEnable="route('roles.active', $role->id)"
                :routeDisable="route('roles.destroy', $role->id)"
            />
        </x-slot>
    </x-admin.card-show>
@endsection
