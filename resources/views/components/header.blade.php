<header class="bg-white md:flex md:justify-between md:py-2 md:px-12 items-center fixed w-full" x-data="{isOpen:false}">
    <div class="flex justify-between items-center px-6 py-3 md:py-0">
        <!-- <img class="h-8" src="" alt="LOGO"> -->
        <h3 class="text-indigo-400 md:mb-3 text-2xl font-black">DCMEMPIRE</h3>
        <div class="md:hidden">
            <button @click="isOpen = !isOpen" type="button" class="block text-gray-500 hover:text-white focus:text-white focus:outline-none">
                <svg class="h-6 w-6 fill-current" viewBox="0 0 24 24">
                    <template x-if="!isOpen">
                        <path fill="#000" d="M4 5h16a1 1 0 0 1 0 2H4a1 1 0 1 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2zm0 6h16a1 1 0 0 1 0 2H4a1 1 0 0 1 0-2z" />
                    </template>
                    <template x-if="isOpen">
                        <path fill="#000" d="M18.278 16.864a1 1 0 0 1-1.414 1.414l-4.829-4.828-4.828 4.828a1 1 0 0 1-1.414-1.414l4.828-4.829-4.828-4.828a1 1 0 0 1 1.414-1.414l4.829 4.828 4.828-4.828a1 1 0 1 1 1.414 1.414l-4.828 4.829 4.828 4.828z" />
                    </template>
                </svg>
            </button>
        </div>
    </div>
    <div class="h-screen md:h-16 px-6 pb-6 py-3  md:flex md:p-0 overflow-y-scroll md:overflow-hidden" :class="{'hidden': !isOpen}">
        <a href="/" class="md:text-md mb-6 md:mb-0 block hover:text-gray-400 mt-3 md:ml-2 px-2">Home</a>
        <a href="/" class="md:text-md mb-6 md:mb-0 block hover:text-gray-400 mt-3 md:ml-2 px-2">Features</a>
        <a href="/" class="md:text-md mb-6 md:mb-0 block hover:text-gray-400 mt-3 md:ml-2 px-2">About</a>
        <a href="/" class="md:text-md mb-6 md:mb-0 block hover:text-gray-400 mt-3 md:ml-2 px-2">Contact</a>
        <a href="/" class="md:text-md mb-6 md:mb-0 block hover:text-gray-400 mt-3 md:ml-2 px-2">Resources</a>
        <div class="md:flex mt-3 mb-20 px-2 md:mt-0 md:mb-0">
            @if (Route::has('login'))
            @auth
            <div class="md:pr-20">
                <div class="absolute -bottom-28 mt-3">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="flex items-center  md:text-md hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                <div>{{ Auth::user()->name }}</div>

                                <div class="ml-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <a href="{{ url('/dashboard') }}" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Dashboard</a>
                            <a href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Sth Here</a>
                            <a href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Another thing</a>
                            <a href="/" class="block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition duration-150 ease-in-out">Extra thing</a>
                            <!-- Authentication -->
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                    {{ __('Logout') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
            </div>
            @else
            <div class="mr-3 w-full md:w-20"><a href="{{ route('login') }}" class="w-full md:w-20 block text-center p-3 mr-3 rounded-md md:text-md text-white md:bg-white md:text-black  bg-orange-400">
                    {{ __('Login') }}
                </a></div>
            @if (Route::has('register'))
            <div class="w-full"><a href="{{route('register')}}" class="w-full mt-4 md:mt-1 block text-center p-2 rounded-md font-semibold md:text-md text-orange-400 border border-orange-400 hover:text-white hover:border-orange-400 hover:bg-orange-400">
                    {{ __('Register Now') }}
                </a> </div>@endif
            @endauth
            @endif
        </div>
    </div>
</header>
