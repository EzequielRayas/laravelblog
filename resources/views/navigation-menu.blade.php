<nav class="flex items-center justify-between py-3 px-6 border-b border-gray-100">
    <div id="nav-left" class="flex items-center">
        <a href="{{ route('home') }}">
        <x-jet-application-logo/>
        </a>
        <div class="top-menu ml-10">
            <div class="flex space-x-4">

                <x-jet-nav-link href="{{ route('home') }}" :active="request()->routeIs('dashboard')">
                    {{ __('Home') }}
                </x-jet-nav-link>


            </div>
        </div>
    </div>
    <div id="nav-right" class="flex items-center md:space-x-6">
        @guest
            @include('layouts.partials.header-right-guest')
        @endguest

        @auth()
            @include('layouts.partials.header-right-auth')
        @endauth
    </div>
</nav>