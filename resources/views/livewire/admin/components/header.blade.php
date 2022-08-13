<header
    class="flex items-center justify-between px-6 py-4 bg-gray-100 dark:bg-gray-800/20 dark:bg-opacity-25 border-b-4 border-indigo-600 transition-all duration-300 transform shadow-md bg-opacity-25 backdrop-blur-lg ">
    <div class="flex items-center">
        <button @click="sidebarOpen= !sidebarOpen;" class="text-gray-500 focus:outline-none mx-2 ">
            <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H20M4 12H20M4 18H11" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                      stroke-linejoin="round"/>
            </svg>
        </button>


        <!-- search box -->
        <div class="relative mx-4 ">
            <span class="absolute inset-y-0 left-0 flex items-center pl-3">
                <svg class="w-5 h-5 text-gray-500" viewBox="0 0 24 24" fill="none">
                    <path
                        d="M21 21L15 15M17 10C17 13.866 13.866 17 10 17C6.13401 17 3 13.866 3 10C3 6.13401 6.13401 3 10 3C13.866 3 17 6.13401 17 10Z"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </span>

            <input class="w-32 pl-10 pr-4 rounded-md form-input sm:w-64 focus:border-indigo-600" type="text"
                   placeholder="Search">
        </div>
    </div>

    <div class="flex items-center">
        <div x-data="{ notificationOpen: false }" class="relative">
            <button @click="notificationOpen = ! notificationOpen" class="flex mx-4 text-gray-600 focus:outline-none">
                <svg class="w-6 h-6" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M15 17H20L18.5951 15.5951C18.2141 15.2141 18 14.6973 18 14.1585V11C18 8.38757 16.3304 6.16509 14 5.34142V5C14 3.89543 13.1046 3 12 3C10.8954 3 10 3.89543 10 5V5.34142C7.66962 6.16509 6 8.38757 6 11V14.1585C6 14.6973 5.78595 15.2141 5.40493 15.5951L4 17H9M15 17V18C15 19.6569 13.6569 21 12 21C10.3431 21 9 19.6569 9 18V17M15 17H9"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
            </button>

            <div x-cloak x-show="notificationOpen" @click="notificationOpen = false"
                 class="fixed inset-0 z-10 w-full h-full"></div>

            <div x-cloak x-show="notificationOpen"
                 class="absolute right-0 z-10 mt-2 overflow-hidden bg-white rounded-lg shadow-xl w-80"
                 style="width:20rem;">
                <a href="#"
                   class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                         src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                         alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Sara Salah</span> replied on the <span
                            class="font-bold text-indigo-400" href="#">Upload Image</span> artical . 2m
                    </p>
                </a>
                <a href="#"
                   class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                         src="https://images.unsplash.com/photo-1531427186611-ecfd6d936c79?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=634&q=80"
                         alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Slick Net</span> start following you . 45m
                    </p>
                </a>
                <a href="#"
                   class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                         src="https://images.unsplash.com/photo-1450297350677-623de575f31c?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=334&q=80"
                         alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Jane Doe</span> Like Your reply on <span
                            class="font-bold text-indigo-400" href="#">Test with TDD</span> artical . 1h
                    </p>
                </a>
                <a href="#"
                   class="flex items-center px-4 py-3 -mx-2 text-gray-600 hover:text-white hover:bg-indigo-600">
                    <img class="object-cover w-8 h-8 mx-1 rounded-full"
                         src="https://images.unsplash.com/photo-1580489944761-15a19d654956?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=398&q=80"
                         alt="avatar">
                    <p class="mx-2 text-sm">
                        <span class="font-bold" href="#">Abigail Bennett</span> start following you . 3h
                    </p>
                </a>
            </div>
        </div>
        <div class="relative">
            <!-- Dark Mode Toggle -->
            <button @click="dark()" type="button"
                    class="text-yellow-500 dark:text-indigo-600 hover:text-indigo-600 dark:hover:text-yellow-500  rounded-lg text-sm mx-4 px-2 flex justify-center items-center ">
                <svg id="theme-toggle-dark-iconLg"
                     class="hidden w-5 h-5 rotate-90 hover:rotate-0 transition-all duration-150" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path>
                </svg>
                <svg id="theme-toggle-light-iconLg"
                     class="hidden w-5 h-5 hover:rotate-90 transition-all duration-150" fill="currentColor"
                     viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z"
                        fill-rule="evenodd" clip-rule="evenodd"></path>
                </svg>
            </button>
        </div>

        <div x-data="{ dropdownOpen: false }" class="relative">
            <button @click="dropdownOpen = ! dropdownOpen"
                    class="relative block w-8 h-8 overflow-hidden rounded-full shadow focus:outline-none text-gray-700 dark:text-300">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-full w-full" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
            </button>

            <div x-cloak x-show="dropdownOpen" @click="dropdownOpen = false"
                 class="fixed inset-0 z-10 w-full h-full"></div>

            <div x-cloak x-show="dropdownOpen"
                 class="absolute right-0 z-10 w-48 mt-2 overflow-hidden bg-white rounded-md shadow-xl">
                <a href=" {{ route('profile.show') }}"
                   class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white">Profile</a>
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}" x-data>
                    @csrf
                    <a href="{{ route('logout') }}"
                       class="block px-4 py-2 text-sm text-gray-700 hover:bg-indigo-600 hover:text-white"
                       @click.prevent="$root.submit();">
                        {{ __('Log Out') }}
                    </a>
                </form>
            </div>
        </div>
    </div>
</header>

<script>

    // var themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
    var themeToggleDarkIconLg = document.getElementById('theme-toggle-dark-iconLg');
    // var themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');
    var themeToggleLightIconLg = document.getElementById('theme-toggle-light-iconLg');

    // Change the icons inside the button based on previous settings
    if (localStorage.getItem('color-theme') === 'dark' || (!('color-theme' in localStorage) && window.matchMedia('(prefers-color-scheme: dark)').matches)) {
        // themeToggleLightIcon.classList.remove('hidden');
        themeToggleLightIconLg.classList.remove('hidden');
    } else {
        // themeToggleDarkIcon.classList.remove('hidden');
        themeToggleDarkIconLg.classList.remove('hidden');
    }

    function dark() {
        // toggle icons inside button
        //themeToggleDarkIcon.classList.toggle('hidden');
        themeToggleDarkIconLg.classList.toggle('hidden');
        // themeToggleLightIcon.classList.toggle('hidden');
        themeToggleLightIconLg.classList.toggle('hidden');

        // if set via local storage previously
        if (localStorage.getItem('color-theme')) {
            if (localStorage.getItem('color-theme') === 'light') {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            } else {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            }

            // if NOT set via local storage previously
        } else {
            if (document.documentElement.classList.contains('dark')) {
                document.documentElement.classList.remove('dark');
                localStorage.setItem('color-theme', 'light');
            } else {
                document.documentElement.classList.add('dark');
                localStorage.setItem('color-theme', 'dark');
            }
        }

    }

</script>
