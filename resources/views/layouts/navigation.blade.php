<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('dashboard') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" viewBox="0 0 48 48"><path fill="#45413c" d="M10.5 42.5a13.5 1.5 0 1 0 27 0a13.5 1.5 0 1 0-27 0" opacity="0.15"/><path fill="#debb7e" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" d="m40.21 26.6l.28 1.4s-11 3.86-16.25 5c-6 1.27-15.56 2.13-18.72 2.57a3.88 3.88 0 0 1-3.93-2l-.49-.87l38.84-7.58Z" stroke-width="1"/><path fill="#f0d5a8" d="m40.21 26.6l-.46-2.43c-.7-3.72-9-8.13-19-7.11c0 0-1.9-3.42 1-4.6s23.92-5.17 24.7 10.83a2.44 2.44 0 0 1-2 2.49Z"/><path fill="#f7e5c6" d="M21.81 12.46c-1.91.77-1.76 2.49-1.43 3.59a2.7 2.7 0 0 1 1.16-.83c2.83-1.15 22.7-4.94 24.58 9.47a2.34 2.34 0 0 0 .39-1.4c-.78-16-21.78-12.01-24.7-10.83"/><path fill="#debb7e" d="m40.21 26.6l4.29-.82a2.44 2.44 0 0 0 2-2.49a14.5 14.5 0 0 0-.73-4a5 5 0 0 0-2.58-.16c-2.35.44-4 2.3-3.62 4.14Z"/><path fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" d="m40.21 26.6l4.29-.82a2.44 2.44 0 0 0 2-2.49a14.5 14.5 0 0 0-.73-4a5 5 0 0 0-2.58-.16c-2.35.44-4 2.3-3.62 4.14Z" stroke-width="1"/><path fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" d="m40.21 26.6l-.46-2.43c-.7-3.72-9-8.13-19-7.11c0 0-1.9-3.42 1-4.6s23.92-5.17 24.7 10.83a2.44 2.44 0 0 1-2 2.49Z" stroke-width="1"/><path fill="#ffe500" d="m20.79 17.06l-19.27 14A1.25 1.25 0 0 0 1 32.3l.08.44l.46 2.43a1.24 1.24 0 0 0 1.45 1a1.22 1.22 0 0 0 1-1.44l-.23-1.22l3.65-.69l.34 1.83a1.86 1.86 0 0 0 3.65-.69l-.35-1.83l17-3.22l.23 1.22a1.24 1.24 0 0 0 1.45 1a1.22 1.22 0 0 0 1-1.44l-.23-1.22l6.08-1.15l.34 1.83a1.86 1.86 0 0 0 3.65-.69l-.81-4.25c-.71-3.76-8.99-8.21-18.97-7.15"/><path fill="#ebcb00" d="m36.57 27.28l.34 1.83a1.86 1.86 0 0 0 3.65-.69l-.81-4.25c-.7-3.72-9-8.13-19-7.11l-1.09.79c8.22.25 14.58 4 15.19 7.23l.46 2.43Z"/><path fill="#ebcb00" d="M6.34 31a.51.51 0 0 1-.49-.41a.5.5 0 0 1 .4-.58l30.37-5.75a.5.5 0 1 1 .19 1L6.43 31Z"/><path fill="none" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" d="m30.49 28.43l-.23-1.21m6.31.06l-.46-2.43m-15.32-7.79l-19.27 14A1.25 1.25 0 0 0 1 32.3l.54 2.87a1.24 1.24 0 0 0 1.45 1a1.22 1.22 0 0 0 1-1.44l-.23-1.22l3.65-.69l.34 1.83a1.86 1.86 0 0 0 3.65-.69l-.35-1.83l17-3.22l.23 1.22a1.24 1.24 0 0 0 1.45 1a1.22 1.22 0 0 0 1-1.44l-.23-1.22l6.08-1.15l.34 1.83a1.86 1.86 0 0 0 3.65-.69l-.81-4.25c-.71-3.76-8.99-8.21-18.97-7.15M7.41 32.8l-.23-1.21" stroke-width="1"/><path fill="#ff6242" stroke="#45413c" stroke-linecap="round" stroke-linejoin="round" d="M18.18 23.21c2.35-.44 4.05-1.89 3.79-3.23c-.18-1-1.33-1.6-2.83-1.73l-5.4 3.93c.68.95 2.47 1.41 4.44 1.03M34.3 25.2a1.74 1.74 0 0 0 .36-1.33c-.25-1.34-2.36-2.07-4.71-1.63s-4 1.9-3.79 3.24a1.76 1.76 0 0 0 .82 1.1ZM10 29.79a1.74 1.74 0 0 0 .35-1.32c-.18-1-1.36-1.63-2.89-1.73l-5.35 3.89a2 2 0 0 0 .58.55Zm13.86-2.62c-.71-1.3-2.87-2-5.22-1.53s-4.11 1.86-4.3 3.36Z" stroke-width="1"/></svg>
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                        {{ __('Dashboard') }}
                    </x-nav-link>
                </div>
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('cart.index')" :active="request()->routeIs('cart.*')">
                        {{ __('Cart') }}
                    </x-nav-link>
                </div>
                
                <!-- Order Link -->
                <div class="hidden space-x-8 sm:-my-px sm:ms-10 sm:flex">
                    <x-nav-link :href="route('order.index')" :active="request()->routeIs('orders.*')">
                        {{ __('Order') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            <div class="hidden sm:flex sm:items-center sm:ms-6">
                <x-dropdown align="right" width="48">
                    <x-slot name="trigger">
                        <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                            <div>{{ Auth::user()->name }}</div>

                            <div class="ms-1">
                                <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                </svg>
                            </div>
                        </button>
                    </x-slot>

                    <x-slot name="content">
                        <x-dropdown-link :href="route('profile.edit')">
                            {{ __('Profile') }}
                        </x-dropdown-link>

                        <!-- Authentication -->
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf

                            <x-dropdown-link :href="route('logout')"
                                    onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                {{ __('Log Out') }}
                            </x-dropdown-link>
                        </form>
                    </x-slot>
                </x-dropdown>
            </div>

            <!-- Hamburger -->
            <div class="-me-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
        </div>
    </div>
</nav>
