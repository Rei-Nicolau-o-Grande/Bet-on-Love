<x-form.card>
    <x-form.text-center
        title="{{ __('Sign in') }}"
        description="{{ __('Don\'t have an account?') }}"
        linkHref="{{ route('register.create') }}"
        linkText="{{ __('Sign up') }} {{ __('here') }}"
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
            {{ __('Sign in') }} {{ __('with') }} Google
        </x-form.button>

        <div class="py-3 flex items-center text-xs text-gray-400 uppercase before:flex-1 before:border-t before:border-gray-200 before:me-6 after:flex-1 after:border-t after:border-gray-200 after:ms-6 dark:text-gray-500">
            {{ __('Or') }}
        </div>

        <form action="{{ route('authenticate') }}" method="post">
            @csrf
            @method('POST')
            <div class="grid gap-y-4">
                <x-form.input
                    type="email"
                    id="email"
                    name="email"
                    label="Email"
                    :error="$errors->get('email')"
                    value="{{ old('email', '') }}"
                    required
                />
                <x-form.input
                    type="password"
                    id="password"
                    name="password"
                    label="Password"
                    error=""
                    value="{{ old('password', '') }}"
                    required
                />

                <div class="flex justify-between items-center">
                    <!-- Alinhado à esquerda -->
                    <div class="flex items-center">
                        <x-form.input-checkbox
                            id="remember-me"
                            name="remember-me"
                            label="{{ __('Remember me') }}"
                            classLabel="ms-3 text-sm dark:text-white"
                        />
                    </div>

                    <!-- Alinhado à direita -->
                    <div class="flex">
                        <a
                            class="inline-flex items-center gap-x-1 text-sm text-blue-600 decoration-2 hover:underline focus:outline-none focus:underline font-medium"
                            href="">
                            {{ __('Forgot your password?') }}
                        </a>
                    </div>
                </div>

                <x-form.button
                    type="submit"
                    class="w-full py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none">
                    {{ __('Sign in') }}
                </x-form.button>
            </div>
        </form>
    </div>
</x-form.card>
