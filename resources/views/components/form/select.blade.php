<!-- Select -->
<label for="{{ $id }}" class="{{ $classLabel }}">
    {{ __('Role') }}
</label>

<select id="{{ $id }}" data-hs-select='{
  "placeholder": "{{ __('Select Role...') }}",
  "toggleTag": "<button type=\"button\" aria-expanded=\"false\"></button>",
  "toggleClasses": "hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 relative py-3 ps-4 pe-9 flex gap-x-2 text-nowrap w-full cursor-pointer bg-neutral-700 border border-neutral-600 rounded-lg text-start text-sm focus:outline-none focus:ring-2 focus:ring-blue-500 dark:bg-neutral-700 dark:border-neutral-600 dark:text-white dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-neutral-600",
  "dropdownClasses": "mt-2 z-50 w-full max-h-72 p-1 space-y-0.5 bg-neutral-700 border border-neutral-600 rounded-lg overflow-hidden overflow-y-auto [&::-webkit-scrollbar]:w-2 [&::-webkit-scrollbar-thumb]:rounded-full [&::-webkit-scrollbar-track]:bg-neutral-700 [&::-webkit-scrollbar-thumb]:bg-neutral-600 dark:[&::-webkit-scrollbar-track]:bg-neutral-700 dark:[&::-webkit-scrollbar-thumb]:bg-neutral-600 dark:bg-neutral-700 dark:border-neutral-600",
  "optionClasses": "py-2 px-4 w-full text-sm text-white cursor-pointer hover:bg-neutral-800 rounded-lg focus:outline-none focus:bg-neutral-800 hs-select-disabled:pointer-events-none hs-select-disabled:opacity-50 dark:bg-neutral-700 dark:hover:bg-neutral-800 dark:text-white dark:focus:bg-neutral-800",
  "optionTemplate": "<div class=\"flex justify-between items-center w-full\"><span data-title></span><span class=\"hidden hs-selected:block\"><svg class=\"shrink-0 size-3.5 text-blue-600 dark:text-blue-500 \" xmlns=\"http:.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><polyline points=\"20 6 9 17 4 12\"/></svg></span></div>",
  "extraMarkup": "<div class=\"absolute top-1/2 end-3 -translate-y-1/2\"><svg class=\"shrink-0 size-3.5 text-gray-500 dark:text-neutral-500 \" xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\"><path d=\"m7 15 5 5 5-5\"/><path d=\"m7 9 5-5 5 5\"/></svg></div>"
}'
    class="hidden"
    name="{{ $name }}"
    >
    {{ $slot }}
</select>
<!-- End Select -->
@if(is_array($error))
    @foreach($error as $err)
        <p class="text-sm text-red-600">{{ $err }}</p>
    @endforeach
@elseif($error)
    <p class="text-sm text-red-600">{{ $error }}</p>
@endif
