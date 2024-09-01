<div>
    <label for="{{ $id }}" class="block text-sm mb-2 dark:text-white">{{ __($label) }}</label>
    <div class="relative">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $name }}"
            class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white"
            value="{{ old($name, $value) }}"
        >
        @if(is_array($error))
            @foreach($error as $err)
                <p class="text-sm text-red-600 mt-2">{{ $err }}</p>
            @endforeach
        @elseif($error)
            <p class="text-sm text-red-600 mt-2">{{ $error }}</p>
        @endif
    </div>
</div>
