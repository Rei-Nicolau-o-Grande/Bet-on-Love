<div class="grid grid-cols-12">
    <div class="col-span-12 xl:col-span-6 md:ml-3">
        <form
            action="{{ $action }}"
            method="{{ $method }}"
            {{ $attributes }}
        >
            <div class="grid gap-y-2">
                {{ $slot }}
            </div>
        </form>
    </div>
</div>
