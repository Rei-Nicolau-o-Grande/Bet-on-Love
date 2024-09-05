<div>
    <label
        for="{{ $id }}"
        class="block text-sm font-medium mb-2"
    >
        {{ __($label) }}
    </label>
    <input
        type="{{ $type }}"
        id="{{ $id }}"
        placeholder="{{ __($placeholder) }}"
        name="{{ $name }}"
        value="{{ old($name, $value) }}"
        class="py-3 px-4 block w-full border-gray-700 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none "
        {{ $required ? 'required' : '' }}
    >
    @if(is_array($error))
        @foreach($error as $err)
            <p class="text-sm text-red-600 mt-2">{{ $err }}</p>
        @endforeach
    @elseif($error)
        <p class="text-sm text-red-600 mt-2">{{ $error }}</p>
    @endif
</div>
