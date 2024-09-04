@extends('admin.app-admin')

@section('title', $user->username)

@section('content')
    <h1 class="text-2xl text-center">{{ __('Username') }} - {{ $user->username }}</h1>

    <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <div class="grid grid-cols-3 gap-4 items-center">
            <!-- Avatar -->
            <div class="col-span-1 flex justify-center">
                <img class="w-16 h-16 rounded-full" src="https://via.placeholder.com/150?text=Boi" alt="Avatar do Boi">
            </div>

            <!-- User Information -->
            <div class="col-span-2">
                <p class="text-lg font-medium text-gray-900">{{ $user->username }}</p>
                <p class="text-sm text-gray-500">{{ $user->email }}</p>
                <p class="text-sm text-gray-400">{{ $user->email_verified_at ? $user->email_verified_at->diffForHumans() : __('Not Verified') }}</p>
                <p class="text-sm text-gray-500">{{ $user->roles->first()->name }}</p>
                <p class="text-sm text-gray-400">{{ $user->roles->first()->description }}</p>
            </div>
        </div>

        <!-- Action Buttons -->
        <div class="mt-4 flex space-x-3">

            <a href="{{ route('users.edit', $user->id) }}">
                <x-form.button
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    type="button"
                >
                    {{ __('Edit') }}
                </x-form.button>
            </a>

            <form action="{{ route('users.active', $user) }}" method="post">
                @csrf
                @method('PATCH')
                <button
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded"
                    type="submit"
                >
                    {{ __('Enable') }}
                </button>
            </form>

            <form action="{{ route('users.destroy', $user) }}" method="post">
                @csrf
                @method('DELETE')
                <button
                    class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded"
                    type="submit"
                >
                    {{ __('Disable') }}
                </button>
            </form>

        </div>
    </div>

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
