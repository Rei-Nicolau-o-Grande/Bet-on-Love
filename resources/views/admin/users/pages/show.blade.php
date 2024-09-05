@extends('admin.app-admin')

@section('title', $user->username)

@section('content')
    <h1 class="text-2xl text-center">{{ __('Username') }} - {{ $user->username }}</h1>

    <div class="max-w-3xl mx-auto bg-white border border-gray-200 rounded-lg shadow-md p-6">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-4 items-center">
            <!-- User Information -->
            <div class="lg:col-span-2">
                <p class="text-lg font-medium text-gray-900">
                    <span class="font-bold">{{ __('Username') }}:</span> {{ $user->username }}
                </p>
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Email') }}:</span> {{ $user->email }}
                </p>

                <!-- Email Verification -->
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Verified At') }}:</span>
                    {{ $user->email_verified_at ? $user->email_verified_at->diffForHumans() : __('Not Verified') }}
                </p>

                <!-- Creation and Update Dates -->
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Created At') }}:</span> {{ $user->created_at->diffForHumans() }}
                </p>
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Updated At') }}:</span> {{ $user->updated_at->diffForHumans() }}
                </p>

                <!-- Activation Status -->
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Active') }}:</span> {{ $user->active ? __('Yes') : __('No') }}
                </p>

                <!-- Role Information -->
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Role') }}:</span> {{ $user->roles->first()->name }}
                </p>

                <!-- Description Information -->
                <p class="text-sm text-gray-900">
                    <span class="font-bold">{{ __('Description') }}:</span>
                    <span id="description-text">{{ __(Str::limit($user->roles->first()->description, 50)) }}</span>
                </p>

                @if(strlen($user->roles->first()->description) > 50)
                    <div id="hs-show-hide-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-show-hide-collapse">
                        <p class="text-gray-500 mt-2">
                            {{ $user->roles->first()->description }}
                        </p>
                    </div>
                    <p class="mt-2">
                        <button type="button" class="hs-collapse-toggle inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:outline-none focus:underline focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" id="hs-show-hide-collapse" aria-expanded="false" aria-controls="hs-show-hide-collapse-heading" data-hs-collapse="#hs-show-hide-collapse-heading" onclick="toggleDescription()">
                            <span class="hs-collapse-open:hidden">{{ __('Read more') }}</span>
                            <span class="hs-collapse-open:block hidden">{{ __('Read less') }}</span>
                            <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path d="m6 9 6 6 6-6"></path>
                            </svg>
                        </button>
                    </p>
                @endif
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col space-y-3 lg:flex-col lg:space-y-3">
                <a href="{{ route('users.edit', $user->id) }}" class="w-full">
                    <x-form.button
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"
                        type="button"
                    >
                        {{ __('Edit') }}
                    </x-form.button>
                </a>
                @if($user->active == 0)
                    <form action="{{ route('users.active', $user) }}" method="post" class="w-full"
                          onsubmit="return confirm('{{ __('Are you sure you want to enable this user ?') }}');"
                    >
                        @csrf
                        @method('PATCH')
                        <x-form.button
                            class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full"
                            type="submit"
                        >
                            {{ __('Enable') }}
                        </x-form.button>
                    </form>
                @elseif($user->active == 1)
                    <form action="{{ route('users.destroy', $user) }}" method="post" class="w-full"
                          onsubmit="return confirm('{{ __('Are you sure you want to disable this user ?') }}');"
                    >
                        @csrf
                        @method('DELETE')
                        <x-form.button
                            class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full"
                            type="submit"
                        >
                            {{ __('Disable') }}
                        </x-form.button>
                    </form>
                @endif
            </div>
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
