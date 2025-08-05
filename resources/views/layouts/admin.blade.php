<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'My App')</title>
    @vite(['resources/css/app.css'])
    <!-- Tailwind CSS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.slim.min.js" integrity="sha512-sNylduh9fqpYUK5OYXWcBleGzbZInWj8yCJAU57r1dpSK9tP2ghf/SRYCMj+KsslFkCOt3TvJrX2AV/Gc3wOqA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <style>
        /* Custom scrollbar for better aesthetics */
        ::-webkit-scrollbar {
            width: 8px;
        }

        ::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        ::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 4px;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #555;
        }
    </style>
</head>

<body class="bg-gray-100 font-sans">

    <div class="flex h-screen bg-gray-200">
        <!-- Sidebar Component -->
        <x-sidebar />

        <!-- Main content -->
        <div class="flex-1 flex flex-col overflow-hidden">
            <!-- Header Component -->
            <header class="flex items-center justify-between px-5 py-3 bg-white border-b-2 border-gray-200 shadow-sm">
                <div class="flex items-center justify-between">
                    <button id="sidebar-toggle" class="p-2 rounded-md ms-auto hover:bg-sky-100 focus:outline-none focus:bg-sky-100">
                        <!-- Heroicon: bars-3 -->
                        <svg id="sidebar-toggle-icon" class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>
                </div>
                <!-- User Menu and Notifications -->
                <div class="flex items-center">
                    <!-- Dark/Light Mode Toggle -->
                    <button id="theme-toggle" class="flex items-center mx-2 text-gray-600 hover:text-gray-800 focus:outline-none cursor-pointer" title="Toggle dark/light mode">
                        <!-- Heroicon: sun/moon -->
                        <svg id="theme-icon" class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path id="theme-icon-path" stroke-linecap="round" stroke-linejoin="round" d="M12 3v1m0 16v1m8.66-8.66h-1M4.34 12H3.34m15.02 4.24l-.71-.71M6.34 6.34l-.71-.71m12.02 12.02l-.71-.71M6.34 17.66l-.71-.71M12 7a5 5 0 100 10 5 5 0 000-10z" />
                        </svg>
                    </button>
                    <button class="flex items-center mx-4 text-gray-600 hover:text-gray-800 focus:outline-none cursor-pointer" id="notification-btn">
                        <!-- Heroicon: bell -->
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M14.857 17.082a23.848 23.848 0 005.454-1.31A8.967 8.967 0 0118 9.75v-.7V9A6 6 0 006 9v.75a8.967 8.967 0 01-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 01-5.714 0m5.714 0a3 3 0 11-5.714 0" />
                        </svg>
                    </button>

                    <div class="relative">
                        <button id="dropdown-button" class="relative z-10 block h-10 w-40 overflow-hidden rounded-full shadow focus:outline-none bg-indigo-100 flex items-center justify-center">
                            <span class="text-indigo-700 font-semibold text-xs truncate px-2">{{ Auth::user()->email ?? 'Guest' }}</span>
                        </button>

                        <div id="dropdown-menu" class="hidden absolute right-0 mt-2 w-48 bg-white rounded-md shadow-xl z-20 transition-transform transform origin-top-right scale-95 ease-out duration-100">
                            <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Profile</a>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full text-left block px-4 py-2 text-sm text-gray-700 hover:bg-blue-500 hover:text-white">Logout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </header>

            <!-- Page Content -->
            <main class="flex-1 overflow-x-hidden overflow-y-auto bg-gray-100">
                <div class="container mx-auto px-6 py-8">
                    @yield('content')
                </div>
            </main>
        </div>
    </div>

    @vite(['resources/js/app.js'])
    @stack('scripts')
</body>

</html>