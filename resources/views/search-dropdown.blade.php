<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Search Dropdown') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-4 h-screen">
                <nav class="bg-white shadow">
                    <div class="max-w-7xl mx-auto px-2 sm:px-4 lg:px-8">
                        <div class="flex justify-between h-16">
                            <div class="flex px-2 lg:px-0">
                                <div class="flex-shrink-0 flex items-center">
                                    <img class="block lg:hidden h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-mark-on-white.svg" alt="Workflow logo">
                                    <img class="hidden lg:block h-8 w-auto"
                                        src="https://tailwindui.com/img/logos/workflow-logo-on-white.svg" alt="Workflow logo">
                                </div>
                                <div class="hidden lg:ml-6 lg:flex">
                                    <a href="#"
                                        class="inline-flex items-center px-1 pt-1 border-b-2 border-indigo-500 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition duration-150 ease-in-out">
                                        Dashboard
                                    </a>
                                    <a href="#"
                                        class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        Team
                                    </a>
                                    <a href="#"
                                        class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        Projects
                                    </a>
                                    <a href="#"
                                        class="ml-8 inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">
                                        Calendar
                                    </a>
                                </div>
                            </div>

                            {{-- Search Box --}}
                            {{-- <div class="flex-1 flex items-center justify-center px-2 lg:ml-6 lg:justify-end">
                                <div class="max-w-lg w-full lg:max-w-xs">
                                    <label for="search" class="sr-only">Search for songs</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                            <svg class="h-5 w-5 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                                <path fill-rule="evenodd"
                                                    d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                                    clip-rule="evenodd" />
                                            </svg>
                                        </div>
                                        <input 
                                            id="search"
                                            class="block w-full pl-10 pr-3 py-2 border border-gray-300 rounded-md leading-5 bg-white placeholder-gray-500 focus:outline-none focus:placeholder-gray-400 focus:border-blue-300 focus:shadow-outline-blue sm:text-sm transition duration-150 ease-in-out"
                                            placeholder="Search for songs..." type="search" autocomplete="off">
                                        <ul
                                            class="absolute z-50 bg-white border border-gray-300 w-full rounded-md mt-2 text-gray-700 text-sm divide-y divide-gray-200">
                                            <li>
                                                <a href="#"
                                                    target="_blank"
                                                    class="flex items-center py-3 hover:bg-gray-200 transition ease-in-out duration-150">
                                                    <img src="https://yt3.ggpht.com/a/AATXAJy4EOYqoWGNS5eqtj0mc0C16I7U-s5cyZkkK5RI_Q=s900-c-k-c0xffffffff-no-rj-mo" alt="album art" class="w-10">
                                                    <div class="ml-4 leading-tight">
                                                        <div class="font-semibold">
                                                            Rick Astley
                                                        </div>
                                                        <div class="text-gray-600">
                                                            Never Gonna Give you Up
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center py-3 hover:bg-gray-200 transition ease-in-out duration-150">
                                                    <img src="https://yt3.ggpht.com/a/AATXAJy4EOYqoWGNS5eqtj0mc0C16I7U-s5cyZkkK5RI_Q=s900-c-k-c0xffffffff-no-rj-mo" alt="album art" class="w-10">
                                                    <div class="ml-4 leading-tight">
                                                        <div class="font-semibold">
                                                            Rick Astley
                                                        </div>
                                                        <div class="text-gray-600">
                                                            Never Gonna Give you Up
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#"
                                                    class="flex items-center py-3 hover:bg-gray-200 transition ease-in-out duration-150">
                                                    <img src="https://yt3.ggpht.com/a/AATXAJy4EOYqoWGNS5eqtj0mc0C16I7U-s5cyZkkK5RI_Q=s900-c-k-c0xffffffff-no-rj-mo" alt="album art" class="w-10">
                                                    <div class="ml-4 leading-tight">
                                                        <div class="font-semibold">
                                                            Rick Astley
                                                        </div>
                                                        <div class="text-gray-600">
                                                            Never Gonna Give you Up
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div> --}}
                            {{-- End Search Box --}}

                            <livewire:search-dropdown />

                            <div class="flex items-center lg:hidden">
                                <!-- Mobile menu button -->
                                <button
                                    class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out"
                                    aria-label="Main menu" aria-expanded="false">
                                    <!-- Icon when menu is closed. -->
                                    <!-- Menu open: "hidden", Menu closed: "block" -->
                                    <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 6h16M4 12h16M4 18h16" />
                                    </svg>
                                    <!-- Icon when menu is open. -->
                                    <!-- Menu open: "block", Menu closed: "hidden" -->
                                    <svg class="hidden h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M6 18L18 6M6 6l12 12" />
                                    </svg>
                                </button>
                            </div>
                            <div class="hidden lg:ml-4 lg:flex lg:items-center">
                                <button
                                    class="flex-shrink-0 p-1 border-2 border-transparent text-gray-400 rounded-full hover:text-gray-500 focus:outline-none focus:text-gray-500 focus:bg-gray-100 transition duration-150 ease-in-out"
                                    aria-label="Notifications">
                                    <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                    </svg>
                                </button>

                                <!-- Profile dropdown -->
                                <div class="ml-4 relative flex-shrink-0">
                                    <div>
                                        <button
                                            class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out"
                                            id="user-menu" aria-label="User menu" aria-haspopup="true">
                                            <img class="h-8 w-8 rounded-full"
                                                src="data:image/jpeg;base64,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"
                                                alt="">
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
</x-app-layout>