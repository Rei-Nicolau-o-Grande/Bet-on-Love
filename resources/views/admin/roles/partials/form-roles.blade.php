<x-admin.input-form
    :label="__('Name')"
    :type="'text'"
    :id="'name'"
    :placeholder="'Enter name role...'"
    :name="'name'"
    :value="old('name', $role->name ?? '')"
    :required="true"
    :error="$errors->get('name')"
/>

<x-admin.text-area-form
    :label="__('Description')"
    :id="'description'"
    :placeholder="'Enter description role...'"
    :name="'description'"
    :value="old('description', $role->description ?? '')"
    :required="true"
    :error="$errors->get('description')"
/>

<div class="flex justify-start gap-4 mt-4">
    <a href="{{ isset($user) ? route('roles.show', $user->id) : route('roles.index') }}">
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
        {{ isset($role) ? __('Update') : __('Create') }}
    </x-form.button>
</div>
