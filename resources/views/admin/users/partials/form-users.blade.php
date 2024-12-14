
<x-admin.input-form
    :label="__('Username')"
    :type="'text'"
    :id="'username'"
    :placeholder="'Enter username...'"
    :name="'username'"
    :value="old('username', $user->username ?? '')"
    :required="true"
    :error="$errors->get('username')"
/>

<x-admin.input-form
    :label="__('Email')"
    :type="'email'"
    :id="'email'"
    :placeholder="'Enter email...'"
    :name="'email'"
    :value="old('email', $user->email ?? '')"
    :required="true"
    :error="$errors->get('email')"
/>

<x-admin.input-form
    :label="__('Password')"
    :type="'password'"
    :id="'password'"
    :placeholder="'Enter password...'"
    :name="'password'"
    :value="old('password', '')"
    :required="false"
    :error="$errors->get('password')"
/>

<x-admin.input-form
    :label="__('Confirm Password')"
    :type="'password'"
    :id="'password_confirmation'"
    :placeholder="'Confirm password...'"
    :name="'password_confirmation'"
    :value="old('password_confirmation', '')"
    :required="false"
    :error="$errors->get('password_confirmation')"
/>

<x-form.show-password
    classLabel="ms-3 text-sm dark:text-dark"
/>

<x-admin.select-form
    :label="__('Role')"
    :name="'role_id'"
    :error="$errors->get('role_id')"
    :placeholder="'Select Role...'"
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
</x-admin.select-form>

<div class="flex justify-start gap-4 mt-4">
    <a href="{{ isset($user) ? route('users.show', $user->id) : route('users.index') }}">
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
