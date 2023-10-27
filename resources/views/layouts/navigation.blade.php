<nav x-data="{ open: false }"
     class="sticky top-0 border-b border-gray-100 bg-white dark:border-gray-700 dark:bg-gray-800">
    <!-- Primary Navigation Menu -->
    <div class="navbar flex bg-base-100">
        <div class="w-1/3 flex-1 justify-start">
            <a href="{{ url('/') }}">
                <img src="images/ankerdlogotext2023.png" class="h-auto w-40" alt="Ankerd Logo Text">
            </a>
        </div>
        <div class="w-1/3 flex-1 justify-center">

        </div>
        <div class="w-1/3 flex-1 justify-end">
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Blog') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Portfolio') }}
            </x-nav-link>
            <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Contact') }}
            </x-nav-link>

            @if (Auth::check())
                <div>{{ Auth::user()->name }}</div>
                <div class="dropdown-end dropdown">
                    <label tabindex="0" class="avatar btn btn-circle btn-ghost">
                        <div class="w-10 rounded-full">
                            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200"/>
                        </div>
                    </label>
                    <ul tabindex="0"
                        class="menu dropdown-content rounded-box menu-sm z-[1] mt-3 w-52 bg-base-100 p-2 shadow">
                        <li>
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>
                        </li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                            this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </ul>
                </div>
            @else
                <x-nav-link href="{{ route('login') }}">
                    Log in
                </x-nav-link>
                @if (Route::has('register'))
                    <x-nav-link href="{{ route('register') }}">
                        Register
                    </x-nav-link>
                @endif
            @endif

        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{ 'block': open, 'hidden': !open }" class="hidden sm:hidden">
        <div class="space-y-1 pb-3 pt-2">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        @if (Auth::check())
            <div class="border-t border-gray-200 pb-1 pt-4 dark:border-gray-600">
                <div class="px-4">
                    <div class="text-base font-medium text-gray-800 dark:text-gray-200">{{ Auth::user()->name }}</div>
                    <div class="text-sm font-medium text-gray-500">{{ Auth::user()->email }}</div>
                </div>

                <div class="mt-3 space-y-1">
                    <x-responsive-nav-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-responsive-nav-link>

                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                        this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-responsive-nav-link>
                    </form>
                </div>
            </div>
        @else
            <a :href="route('login')"></a>
        @endif
    </div>
</nav>
