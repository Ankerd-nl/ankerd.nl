<footer class="footer bg-base-300 p-10 text-base-content">
    <nav>
        <a href="{{ url('/') }}">
            <img src="images/ankerdlogotext2023.png" class="h-auto w-40" alt="Ankerd Logo Text">
        </a>
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Blog') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Portfolio') }}
        </x-nav-link>
        <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            {{ __('Contact') }}
        </x-nav-link>
        <p class="text-xs"> © 2023 ankerd by gavin132_</p>
    </nav>
</footer>
