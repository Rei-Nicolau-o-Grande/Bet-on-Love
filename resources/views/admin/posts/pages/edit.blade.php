@extends('admin.app-admin')

@section('title', __('Edit Post'))

@section('content')
    <h1 class="text-2xl text-center">{{ __('Edit Post') }}</h1>

    <x-admin.form-model
        action="{{ route('posts.update', $post) }}"
        method="post"
    >
        @csrf
        @method('PUT')
        @include('admin.posts.partials.form-posts')
    </x-admin.form-model>

@endsection
