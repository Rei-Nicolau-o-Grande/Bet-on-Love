
<x-form.input
    classLabel="block text-sm mb-2 dark:text-dark"
    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
    type="text"
    id="username"
    name="username"
    label="Username"
    :error="$errors->get('username')"
    value="{{ $user->username ?? old('username') }}"
    required
/>

<x-form.input
    classLabel="block text-sm mb-2 dark:text-dark"
    classInput="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
    type="email"
    id="email"
    name="email"
    label="Email"
    :error="$errors->get('email')"
    value="{{ $user->email ?? old('email') }}"
    required
/>

<x-form.input
    classLabel="block text-sm mb-2 dark:text-dark"
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
    classLabel="block text-sm mb-2 dark:text-dark"
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
    classLabel="ms-3 text-sm dark:text-dark"
/>

<x-form.select
    classLabel="block text-sm mt-2 dark:text-dark"
    nameLabel="Role"
    id="select_role"
    name="role_id"
    :error="$errors->get('role_id')"
>
    <option value="">{{ __('Select Role...') }}</option>
    @foreach($roles as $role)
        <option
            {{ (isset($user) && $user->roles->contains($role->id)) || (old('role_id') == $role->id) ? 'selected' : '' }}
            value="{{ $role->id }}"
        >
            {{ $role->name }}
        </option>
    @endforeach
</x-form.select>

<div class="flex justify-start gap-4 mt-4">
    <a href="{{ route('users.index') }}">
        <x-form.button
            type="button"
            class="py-3 px-4 inline-flex items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-red-500 text-white hover:bg-red-600 focus:outline-none focus:bg-red-600 disabled:opacity-50 disabled:pointer-events-none">
            {{ __('Back') }}
        </x-form.button>
    </a>

    <x-form.button
        type="submit"
        class="py-3 px-4 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-lg border border-transparent bg-blue-600 text-white hover:bg-blue-700 focus:outline-none focus:bg-blue-700 disabled:opacity-50 disabled:pointer-events-none"
    >
        {{ isset($user) ? __('Update') : __('Create') }}
    </x-form.button>
</div>
