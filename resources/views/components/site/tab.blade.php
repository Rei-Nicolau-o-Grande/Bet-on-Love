<div class="border-b border-gray-200">
    <nav class="flex gap-x-1" aria-label="Tabs" role="tablist" aria-orientation="horizontal">
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none active" id="tabs-with-underline-item-1" aria-selected="true" data-hs-tab="#tabs-with-underline-1" aria-controls="tabs-with-underline-1" role="tab">
            {{ __('Profile') }}
        </button>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-underline-item-2" aria-selected="false" data-hs-tab="#tabs-with-underline-2" aria-controls="tabs-with-underline-2" role="tab">
            {{ __('Tickets') }}
        </button>
        <button type="button" class="hs-tab-active:font-semibold hs-tab-active:border-blue-600 hs-tab-active:text-blue-600 py-4 px-1 inline-flex items-center gap-x-2 border-b-2 border-transparent text-sm whitespace-nowrap text-gray-500 hover:text-blue-600 focus:outline-none focus:text-blue-600 disabled:opacity-50 disabled:pointer-events-none" id="tabs-with-underline-item-3" aria-selected="false" data-hs-tab="#tabs-with-underline-3" aria-controls="tabs-with-underline-3" role="tab">
            {{ __('Settings') }}
        </button>
    </nav>
</div>

<div class="mt-3">
    <div id="tabs-with-underline-1" role="tabpanel" aria-labelledby="tabs-with-underline-item-1">
        {{ $user }}
    </div>
    <div id="tabs-with-underline-2" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-2">
        {{ $tickets }}
    </div>
    <div id="tabs-with-underline-3" class="hidden" role="tabpanel" aria-labelledby="tabs-with-underline-item-3">
        {{ $settings }}
    </div>
</div>
