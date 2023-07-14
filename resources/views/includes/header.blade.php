<nav class="bg-white border-gray-200 fixed top-0 w-full shadow-lg dark:bg-gray-900">
    <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto md:p-4 p-2">
        {{-- drawer button --}}
        <button data-drawer-target="drawer-disable-body-scrolling" data-drawer-show="drawer-disable-body-scrolling"
            data-drawer-body-scrolling="false" aria-controls="drawer-disable-body-scrolling"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
            aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M1 1h15M1 7h15M1 13h15" /> 
                    
            </svg>
        </button>

        <a href="{{ route('homepage') }}" class="flex items-center">
            <div class="h-12 w-48 md:bg-[url('{{ asset('public/img/black.png') }}')] dark:md:bg-[url('{{ asset('public/img/white.png') }}')]  bg-[url('{{ asset('public/img/short.png') }}')] dark:bg-[url('{{ asset('public/img/shortfordark.png') }}')]  bg-contain bg-center mr-3 bg-no-repeat"></div>
            
             
        </a>
        <div class="flex items-center md:order-2 gap-2">
            @auth
            <a href="{{ route('dashboard') }}" type="button"
                class="flex mr-3 text-sm items-center  gap-3 rounded-full md:mr-0 focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                id="user-menu-button" aria-expanded="false">
                <img class="w-8 h-8 rounded-full" src="{{ auth()->user()->picture ? asset("public/".auth()->user()->picture) : 'public/img/default.jpg' }}" alt="user photo">
                <span class="hidden md:flex capitalize font-semibold">{{ auth()->user()->name }}</span>
        </a>
            @endauth
            @guest
            
                <a href="{{ route('login') }}" type="button"
                    class="bg-teal-500 hover:bg-teal-600 text-white font-semibold py-2 px-3 rounded-full text-center">Login/Apply</a>
            @endguest
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-user">
            <ul
                class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:flex-row md:space-x-8 md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                <li>
                    <a href="{{ route('homepage') }}"
                        class="block py-2 pl-3 pr-4 text-white bg-teal-700 rounded md:bg-transparent md:text-teal-700 md:p-0 md:dark:text-teal-500"
                        aria-current="page">Home</a>
                </li>
                <li>
                    <a href="{{ route('about') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                </li>
                <li>
                    <a href="{{ route('courses') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Courses</a>
                </li>
                <li>
                    <a href="{{ route('placements') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Achievements</a>
                </li>
                <li>
                    <a href="{{ route('contact') }}"
                        class="block py-2 pl-3 pr-4 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-teal-700 md:p-0 md:dark:hover:text-teal-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
