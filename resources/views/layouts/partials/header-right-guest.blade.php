<div class="flex space-x-5">
    <x-jet-nav-link href="{{ route('login') }}" :active="request()->routeIs('login')">
        {{ __('Login') }}
    </x-jet-nav-link>
    <x-jet-nav-link href="{{ route('register') }}" :active="request()->routeIs('register')">
        {{ __('Register') }}
    </x-jet-nav-link>
</div>