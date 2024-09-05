@props(['items', 'columns', 'modelType'])

<tbody class="divide-y divide-gray-500">
    @if($items->isEmpty())
        <tr>
            <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800" colspan="{{ count($columns) }}">
                {{ __('No records found') }}
            </td>
        </tr>
    @endif
    @if($modelType === 'users')
        @foreach($items as $user)
            <tr class="hover:bg-stone-200">
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
                    {{ $user->active ? __('Yes') : __('No') }}
                </td>

                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">
                    <a href="{{ route('users.show', $user->id) }}"
                       class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                        {{ __('View') }}
                    </a>
                </td>
            </tr>
        @endforeach
    @elseif($modelType === 'roles')
        @foreach($items as $role)
            <tr>
                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-800">
                    {{ $role->name }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                    {{ $role->description }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                    {{ $role->created_at->diffForHumans() }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-800">
                    {{ $role->updated_at->diffForHumans() }}
                </td>
                <td class="px-6 py-4 whitespace-nowrap text-end text-sm font-medium flex items-center gap-x-4">

                    <a href="{{ route('roles.show', $role->id) }}"
                       class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                        {{ __('View') }}
                    </a>

                    <a href="{{ route('roles.edit', $role->id) }}"
                       class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none">
                        {{ __('Edit') }}
                    </a>

                    <form action="{{ route('roles.destroy', $role->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="hidden" name="id" value="{{ $role->id }}">
                        <x-form.button
                            type="submit"
                            class="inline-flex items-center gap-x-2 text-sm font-semibold rounded-lg border border-transparent text-blue-600 hover:text-blue-800 focus:outline-none focus:text-blue-800 disabled:opacity-50 disabled:pointer-events-none"
                        >
                            {{ __('Delete') }}
                        </x-form.button>
                    </form>
                </td>
            </tr>
        @endforeach
    @endif
</tbody>
