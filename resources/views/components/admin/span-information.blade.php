<p class="text-md text-gray-900">
    <span class="font-bold">{{ $label }}:</span>
    <span id="value-text">
        @if (($label === __('Description') || $label === __('Content')) && strlen($value) > 50)
            {{ Str::limit($value, 50) }}
            <div id="hs-show-hide-collapse-heading" class="hs-collapse hidden w-full overflow-hidden transition-[height] duration-300" aria-labelledby="hs-show-hide-collapse">
                <p class="text-gray-500 mt-2">
                    {{ $value }}
                </p>
            </div>
            <p class="mt-2">
                <button type="button" class="hs-collapse-toggle inline-flex items-center gap-x-1 text-sm font-semibold rounded-lg border border-transparent text-blue-600 decoration-2 hover:text-blue-700 hover:underline focus:outline-none focus:underline focus:text-blue-700 disabled:opacity-50 disabled:pointer-events-none" id="hs-show-hide-collapse" aria-expanded="false" aria-controls="hs-show-hide-collapse-heading" data-hs-collapse="#hs-show-hide-collapse-heading" onclick="toggleDescription()">
                    <span class="hs-collapse-open:hidden">{{ __('Read more') }}</span>
                    <span class="hs-collapse-open:block hidden">{{ __('Read less') }}</span>
                    <svg class="hs-collapse-open:rotate-180 shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="m6 9 6 6 6-6"></path>
                    </svg>
                </button>
            </p>
        @elseif(isset($href) && $href)
            <a href="{{ $href }}" class="text-blue-900 font-medium underline hover:text-blue-700">
                {{ $value }}
            </a>
        @else
            {{ $value }}
        @endif
    </span>
</p>
