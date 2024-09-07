<div class="">
    <label
        for="{{ $id }}"
        class="block text-sm font-medium mb-2"
    >
        {{ $label }}
    </label>
    <textarea
        id="{{ $id }}"
        class="py-3 px-4 block w-full border-gray-200 rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
        rows="15"
        placeholder="{{ $placeholder }}"
        name="{{ $name }}"
        {{ $required ? 'required' : '' }}
        style="resize: none;"
    >
        {{ old($name, $value) }}
    </textarea>
</div>

@if(is_array($error))
    @foreach($error as $err)
        <p class="text-sm text-red-600 mt-2">{{ $err }}</p>
    @endforeach
@elseif($error)
    <p class="text-sm text-red-600 mt-2">{{ $error }}</p>
@endif

<script>
    document.querySelector('textarea').value = document.querySelector('textarea').value.trim();
    // document.querySelector('textarea').addEventListener('input', function() {
    //     this.value = this.value.trim();
    // });
</script>
