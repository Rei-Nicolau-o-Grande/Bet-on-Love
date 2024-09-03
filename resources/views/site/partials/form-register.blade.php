<x-form.card>
    <x-form.text-center
        title="{{ __('Register') }}"
        description="{{ __('Already have an account?') }}"
        linkHref="{{ route('login') }}"
        linkText="{{ __('Sign in') }} {{ __('here') }}"
    />

    <div class="mt-5">
        <x-form.button
            type="button"
           class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-gray-200 bg-white dark:bg-neutral-800 dark:text-white text-gray-800 shadow-sm hover:bg-gray-50 focus:outline-none focus:bg-gray-50 dark:hover:bg-neutral-700 disabled:opacity-50 disabled:pointer-events-none"
        >
            <x-form.svg-google
                class="w-4 h-auto"
                width="46"
                height="47"
                viewBox="0 0 46 47"
                fill="none"
            />
            {{ __('Register') }} {{ __('with') }} Google
        </x-form.button>

        <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500">
            {{ __('Or') }}
        </div>

        <!-- Form -->
        <form action="{{ route('register.store') }}" method="post">
            @csrf
            @method('POST')
            <div class="grid gap-y-4">

                <x-form.input
                    classLabel="block text-sm mb-2 dark:text-white"
                    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
                    type="text"
                    id="username"
                    name="username"
                    label="Username"
                    :error="$errors->get('username')"
                    value="{{ old('username') }}"
                    required
                />

                <x-form.input
                    classLabel="block text-sm mb-2 dark:text-white"
                    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
                    type="email"
                    id="email"
                    name="email"
                    label="Email"
                    :error="$errors->get('email')"
                    value="{{ old('email') }}"
                    required
                />

                <x-form.input
                    classLabel="block text-sm mb-2 dark:text-white"
                    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
                    type="password"
                    id="password"
                    name="password"
                    label="Password"
                    :error="$errors->get('password')"
                    value="{{ old('password') }}"
                    required
                />

                <x-form.input
                    classLabel="block text-sm mb-2 dark:text-white"
                    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
                    type="password"
                    id="password_confirmation"
                    name="password_confirmation"
                    label="Confirm Password"
                    :error="$errors->get('password_confirmation')"
                    value="{{ old('password_confirmation') }}"
                    required
                />

                <x-form.show-password
                    classLabel="ms-3 text-sm dark:text-white"
                />

                <x-form.button
                    type="submit"
                    class="w-full mt-5 py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    {{ __('Register') }}
                </x-form.button>
            </div>
        </form>
        <!-- End Form -->
    </div>
</x-form.card>
