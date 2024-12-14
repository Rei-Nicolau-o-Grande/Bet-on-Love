<!-- Button to toggle sidebar (visible on small screens) -->
<button data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 mt-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
    <span class="sr-only">Abrir menu de navegação</span>
    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"/>
    </svg>
</button>

<!-- Overlay for closing the sidebar when clicking outside -->
<div id="overlay" class="fixed inset-0 bg-black opacity-50 hidden"></div>

<div id="default-sidebar" class="fixed top-0 left-0 z-40 w-64 h-screen transition-transform -translate-x-full bg-gray-800 text-white md:translate-x-0">
    <div class="flex flex-col h-full">
        <div class="flex items-center justify-between p-4 border-b border-gray-700">
            <h2 class="text-lg font-semibold">Admin Dashboard</h2>
            <button data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="text-gray-400 hover:text-white md:hidden">
                <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                </svg>
            </button>
        </div>
        <nav class="flex-1 overflow-y-auto">
            <ul class="space-y-2 p-4">
                <li>
                    <a href="#" class="block p-2 rounded hover:bg-gray-700">{{ __('Dashboard') }}</a>
                </li>
                <li>
                    <a href="{{ route('users.index') }}" class="block p-2 rounded hover:bg-gray-700
                    @if(request()->routeIs('users.*')) bg-gray-700 @endif">{{ __('Users') }}</a>
                </li>
                <li>
                    <a href="{{ route('roles.index') }}" class="block p-2 rounded hover:bg-gray-700
                   @if(request()->routeIs('roles.*')) bg-gray-700 @endif">{{ __('Roles') }}</a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}" class="block p-2 rounded hover:bg-gray-700
                    @if(request()->routeIs('posts.*')) bg-gray-700 @endif">{{ __('Posts') }}</a>
                </li>
                <li>
                    <a href="#" class="block p-2 rounded hover:bg-gray-700
                    @if(request()->routeIs('tickets.*')) bg-gray-700 @endif">{{ __('Tickets') }}</a>
                </li>
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    @method('POST')
                    <button type="submit" class="block w-full my-2 p-2 rounded bg-red-500 hover:bg-red-700">{{ __('Logout') }}</button>
                </form>
            </ul>
        </nav>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        const toggleButtons = document.querySelectorAll('[data-drawer-toggle="default-sidebar"]');
        const sidebar = document.getElementById('default-sidebar');
        const overlay = document.getElementById('overlay');

        function toggleSidebar() {
            sidebar.classList.toggle('-translate-x-full'); // Esconde a sidebar
            sidebar.classList.toggle('translate-x-0');   // Mostra a sidebar
            overlay.classList.toggle('hidden');           // Mostra ou esconde o overlay
        }

        if (toggleButtons.length && sidebar && overlay) {
            toggleButtons.forEach(button => {
                button.addEventListener('click', function() {
                    toggleSidebar();
                });
            });

            overlay.addEventListener('click', function() {
                if (!sidebar.classList.contains('-translate-x-full')) {
                    toggleSidebar();
                }
            });
        }
    });
</script>
