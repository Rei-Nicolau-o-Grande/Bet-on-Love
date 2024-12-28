@extends('admin.app-admin')

@section('title', __('Roles'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Post') }} - {{ $post->title }}</h1>

    <x-admin.card-show>
        <x-slot name="cardInformation">
            <x-admin.span-information
                :label="__('Title')"
                :value="Str::limit($post->title, 15)"
            />
            <x-admin.span-information
                :label="__('Status Post')"
                :value="__($post->status_post)"
            />
            <x-admin.span-information
                :label="__('Code')"
                :value="$post->code"
            />
            <x-admin.span-information
                :label="__('Finish Date')"
                :value="$post->finish_date ? $post->finish_date->format('d/m/Y H:i') : __('No date')"
            />
            <x-admin.span-information
                :label="__('Amount')"
                :value="$post->formatted_amount"
            />
            <x-admin.span-information
                :label="__('Created At')"
                :value="$post->created_at->diffForHumans()"
            />
            <x-admin.span-information
                :label="__('Updated At')"
                :value="$post->updated_at->diffForHumans()"
            />
            <x-admin.span-information
                :label="__('Active')"
                :value="$post->is_active ? __('Yes') : __('No')"
            />
            <x-admin.span-information
                :label="__('Content')"
                :value="$post->content"
            />
        </x-slot>

        <x-slot name="cardActionButtons">
            <x-admin.action-buttons
                :model="$post"
                :routeEdit="route('posts.edit', $post->id)"
                :routeEnable="route('posts.active', $post->id)"
                :routeDisable="route('posts.destroy', $post->id)"
            />
        </x-slot>
    </x-admin.card-show>

@endsection
