<div class="max-w-sm h-full rounded overflow-hidden shadow-lg bg-white p-6 hover:bg-gray-100 flex flex-col justify-between">
    <h2 class="font-bold text-xl mb-2 text-gray-800">{{ $post->title }}</h2>
    <p class="text-gray-600 mb-4">
        {{ Str::limit($post->content, 200) }}
    </p>
    <div class="flex items-center justify-between">
        <span class="text-sm font-medium text-gray-500">
            Status: <span class="text-gray-700 font-bold">{{ __($post->status_post) }}</span>
        </span>
        <span class="text-sm font-medium text-gray-500">
            Código: <span class="text-gray-700 font-bold">{{ $post->code }}</span>
        </span>
    </div>
    <div class="flex items-center justify-between mt-4">
        <span class="text-gray-700">
            {{ $post->created_at->diffForHumans() }}
        </span>
    </div>
    <div class="mt-4 flex items-center justify-between">
        <span class="px-3 py-1 text-xs font-medium rounded-full bg-green-100 text-green-800">
            {{ $post->amount != null ? 'R$ ' . number_format($post->amount, 2, ',', '.') : 'Nada ainda' }}
        </span>
        <a href="{{ route('showPost', $post->code) }}"
           class="px-4 py-2 text-sm font-medium text-white bg-blue-500 rounded-full hover:bg-blue-600">
            Detalhes
        </a>
    </div>
</div>
