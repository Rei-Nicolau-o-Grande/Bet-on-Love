<div class="p-4 bg-white shadow rounded-lg hover:bg-gray-300">
    <h3>{{ __('Voce estar ciente que estar desativando sua conta.') }}</h3>
    <p>{{ __('Ao desativar sua conta, você não poderá mais acessar o sistema.') }}</p>
    <p>{{ __('Se você deseja reativar sua conta, entre com seu email e senha.') }}</p>
    <form action="{{ route('profile.destroy', $settings) }}" method="post" class="my-2"
        onsubmit="return confirm('{{ __('Are you sure you want to disable your account?') }}')"
    >
        @csrf
        @method('DELETE')
        <button type="submit" class="bg-red-600 hover:bg-red-800 rounded-lg text-white px-2 py-2">{{ __('Disable') }}</button>
    </form>
</div>
