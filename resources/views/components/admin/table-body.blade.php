@props(['items', 'columns', 'modelType'])

<tbody class="divide-y divide-gray-500">
    @if($items->isEmpty())
        <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800" colspan="{{ count($columns) }}">
                {{ __('No records found') }}
            </td>
        </tr>
    @endif
    @switch($modelType)
        @case('users')
            @foreach($items as $user)
                <tr class="hover:bg-stone-200 {{ $user->is_active ? 'bg-white' : 'bg-gray-300' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ __(Str::limit($user->username, 15)) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ __(Str::limit($user->email, 20)) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $user->roles->first()->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $user->email_verified_at ? $user->email_verified_at->diffForHumans() : __('Not Verified') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $user->created_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $user->updated_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $user->is_active ? __('Yes') : __('No') }}
                    </td>

                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">
                        <a href="{{ route('users.show', $user->id) }}"
                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('View') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @break
        @case('roles')
            @foreach($items as $role)
                <tr class="hover:bg-stone-200 {{ $role->is_active ? 'bg-white' : 'bg-gray-300' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $role->name }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ __(Str::limit($role->description, 50)) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $role->created_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $role->updated_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $role->is_active ? __('Yes') : __('No') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">

                        <a href="{{ route('roles.show', $role->id) }}"
                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('View') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @break
        @case('posts')
            @foreach($items as $post)
                <tr class="hover:bg-stone-200 {{ $post->is_active ? 'bg-white' : 'bg-gray-300' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ __(Str::limit($post->title, 15)) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $post->code }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $post->formatted_amount }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ __($post->status_post) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $post->finish_date ? $post->finish_date->format('d/m/Y H:i') : __('No date') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $post->created_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $post->updated_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $post->is_active ? __('Yes') : __('No') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">
                        <a href="{{ route('posts.show', $post->id) }}"
                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('View') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @break
        @case('tickets')
            @foreach($items as $ticket)
                <tr class="hover:bg-stone-200 {{ $ticket->is_active ? 'bg-white' : 'bg-gray-300' }}">
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $ticket->code }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $ticket->formatted_value }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $ticket->user->username }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ __(Str::limit($ticket->post->title, 15)) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ __($ticket->place) }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $ticket->created_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $ticket->updated_at->diffForHumans() }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                        {{ $ticket->is_active ? __('Yes') : __('No') }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">
                        <a href="{{ route('tickets.show', $ticket->id) }}"
                           class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                            {{ __('View') }}
                        </a>
                    </td>
                </tr>
            @endforeach
            @break
        @default
            <h1 class="text-center ">{{ __('No model type found !!!') }}</h1>
            @break
    @endswitch
</tbody>
