@extends('admin.app-admin')

@section('title', __('Create Post'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Create Post') }}</h1>

    <x-admin.form-model
        action="{{ route('posts.store') }}"
        method="post"
    >
        @csrf
        @method('POST')
        @include('admin.posts.partials.form-posts')
    </x-admin.form-model>

@endsection
