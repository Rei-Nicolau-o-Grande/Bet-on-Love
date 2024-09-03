<div class="flex">
    <input
        id="{{ $id }}"
        name="{{ $name }}"
        type="checkbox"
        class="shrink-0 mt-0.5 border-gray-200 rounded text-blue-600 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:checked:bg-blue-600"
        {{ $attributes }}
    >

    <label
        for="{{ $id }}"
        class="{{ $classLabel }}"
    >
        {{ $label }}
    </label>

</div>
