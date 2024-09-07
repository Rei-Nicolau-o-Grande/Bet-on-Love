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
                        {{ $user->username }}
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                        {{ $user->email }}
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
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
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
                    <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
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
    @endswitch
</tbody>
