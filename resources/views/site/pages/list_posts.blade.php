@extends('site.app-site')

@section('content')
    <x-global.alert />
    <h1 class="text-4xl text-center my-3">{{ __('Posts') }}</h1>

    <div class="flex justify-center items-center min-h-screen bg-gray-50 mx-5">
        <div class="grid grid-cols-1 sm:grid-cols-3 xl:grid-cols-6 gap-4">
            @foreach($listPosts as $post)
                <x-site.card_post :post="$post" />
            @endforeach
        </div>
    </div>


    <div class="my-5 mx-5 justify-items-end">
        {{ $listPosts->links() }}
    </div>
@endsection
