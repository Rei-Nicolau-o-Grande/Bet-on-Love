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

<x-form.button
    class="bg-blue-600 hover:bg-blue-800 rounded-lg text-white px-2 py-2"
    type="submit"
    >
    {{ __('Edit') }}
</x-form.button>

