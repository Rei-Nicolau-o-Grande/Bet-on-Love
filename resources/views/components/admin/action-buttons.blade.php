<div class="flex flex-col space-y-3 lg:flex-col lg:space-y-3">
    <a href="{{ $routeEdit }}" class="w-full">
        <button
            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-full"
            type="button"
        >
            {{ __('Edit') }}
        </button>
    </a>
    @if($model->is_active == 0)
        <form action="{{ $routeEnable }}" method="post" class="w-full"
              onsubmit="return confirm('{{ __("Are you sure you want to 'ENABLE' ?")}}');"
        >
            @csrf
            @method('PATCH')
            <button
                class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded w-full"
                type="submit"
            >
                {{ __('Enable') }}
            </button>
        </form>
    @elseif($model->is_active == 1)
        <form action="{{ $routeDisable }}" method="post" class="w-full"
              onsubmit="return confirm('{{ __("Are you sure you want to 'DISABLE' ?") }}');"
        >
            @csrf
            @method('DELETE')
            <button
                class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded w-full"
                type="submit"
            >
                {{ __('Disable') }}
            </button>
        </form>
    @endif
</div>
