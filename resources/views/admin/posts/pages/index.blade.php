@extends('admin.app-admin')

@section('title', __('Posts'))

@section('content')
    <x-global.alert />
    <h1>{{ __('Posts') }}</h1>
    <a href="{{ route('posts.create') }}" class="">
        <button type="button" class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border
     border-gray-200 bg-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50
     disabled:opacity-50 disabled:pointer-events-none dark:bg-neutral-800 dark:border-neutral-700 dark:text-white
      dark:hover:bg-neutral-700 dark:focus:bg-neutral-700">
            {{ __('Create Post') }}
        </button>
    </a>

    <x-admin.table
        :columns="[
            __('Title'),
            __('Code'),
            __('Amount'),
            __('Status Post'),
            __('Finish Date'),
            __('Created At'),
            __('Updated At'),
            __('Active'),
            __('Actions'),
        ]"
        :items="$posts"
        modelType="posts"
    />

    <div class="my-5 mx-5 justify-items-end">
        {{ $posts->links() }}
    </div>

@endsection
