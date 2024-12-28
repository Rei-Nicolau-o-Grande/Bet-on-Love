<x-admin.input-form
    :label="__('Title')"
    :type="'text'"
    :id="'title'"
    :placeholder="'Enter title post...'"
    :name="'title'"
    :value="old('title', $post->title ?? '')"
    :required="true"
    :error="$errors->get('title')"
/>

<x-admin.text-area-form
    :label="__('Content')"
    :id="'content'"
    :placeholder="'Enter content post...'"
    :name="'content'"
    :value="old('content', $post->content ?? '')"
    :required="true"
    :error="$errors->get('content')"
/>

<x-admin.select-form
    :label="__('Status Post')"
    :name="'status_post'"
    :error="$errors->get('status_post')"
    :placeholder="'Select Status Post...'"
>
    <option value="">{{ __('Select Status Post...') }}</option>
    @foreach($status_posts as $status_post)
        <option
            {{ (isset($post) && $post->status_post === $status_post->value) || (old('status_post') === $status_post->value) ? 'selected' : '' }}
            value="{{ $status_post->value }}"
        >
            {{ __($status_post->name) }}
        </option>
    @endforeach
</x-admin.select-form>

@if (isset($post))
    <x-admin.input-form
        :label="__('Finish Date')"
        :type="'datetime-local'"
        :id="'finish_date'"
        :placeholder="'Enter finish date post...'"
        :name="'finish_date'"
        :value="old('finish_date', $post->finish_date ?? '')"
        :required="false"
        :error="$errors->get('finish_date')"
    />
@endif

<div class="flex justify-start gap-4 mt-4">
    <a href="{{ isset($user) ? route('posts.show', $user->id) : route('posts.index') }}">
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
        {{ isset($post) ? __('Update') : __('Create') }}
    </x-form.button>
</div>
