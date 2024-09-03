<div>
    <label
        for="{{ $id }}"
        class="{{ $classLabel }}"
    >
        {{ __($label) }}
    </label>
    <div class="relative">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $name }}"
            class="{{ $classInput }}"
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
