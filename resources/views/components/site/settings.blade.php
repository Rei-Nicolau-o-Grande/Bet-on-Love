<div class="p-4 bg-white shadow rounded-lg hover:bg-gray-300">
    <form action="{{ route('profile.destroy', $settings) }}" method="post"
        onsubmit="return confirm('{{ __('Are you sure you want to disable your account?') }}')"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 hover:bg-red-800 rounded-lg text-white px-2 py-2">{{ __('Disable Account') }}</button>
    </form>
</div>
