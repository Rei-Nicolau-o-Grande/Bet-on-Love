<ul class="list-disc space-x-6 mx-4">
    <li class="inline-block">
        <a class="inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-blue-600 hover:text-blue-70 focus:outline-none focus:text-blue-700"
            href="{{ route('profile') }}">
            {{ __('Profile') }}
        </a>
    </li>
    <li class="inline-block">
        <a class="inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-blue-600 hover:text-blue-70 focus:outline-none focus:text-blue-700"
           href="{{ route('profile.edit', auth()->user()) }}">
            {{ __('Edit Profile') }}
        </a>
    </li>
    <li class="inline-block">
        <a class="inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-blue-600 hover:text-blue-70 focus:outline-none focus:text-blue-700"
           href="{{ route('profile.settings') }}">
            {{ __('Settings') }}
        </a>
    </li>
    <li class="inline-block">
        <a class="inline-flex items-center gap-x-2 text-sm whitespace-nowrap text-blue-600 hover:text-blue-70 focus:outline-none focus:text-blue-700 opacity-50 pointer-events-none"
           href="#">
            Disabled
        </a>
    </li>
</ul>
