<div id="sidebar" class="flex-shrink-0 bg-gray-800 text-white transition-all duration-300 ease-in-out w-64">
    
    <!-- App Name and Toggle Button -->
    <div class="flex items-center justify-between h-16 px-4 border-b border-gray-700">
        <span id="app-name" class="text-xl font-bold">App Name</span>
    </div>

    <!-- Navigation Links -->
    <nav class="mt-4">
        <ul>
            <li>
                <a href="#" class="w-full block py-3 px-4 transition-colors duration-200 hover:bg-gray-700 active-link">
                    <span class="flex items-center justify-between w-full">
                        <span class="inline-flex items-center">
                            <!-- Heroicon: home -->
                            <svg class="h-6 w-6 mr-2 align-middle " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h7.5" /></svg>
                            <span class="mx-4 font-medium sidebar-text align-middle ">Dashboard</span>
                        </span>
                        <!-- Placeholder for chevron, hidden for non-submenu -->
                        <svg class="h-5 w-5 opacity-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </span>
                </a>
            </li>
            <li>
                <a href="#" class="w-full block py-3 px-4 mt-2 transition-colors duration-200 hover:bg-gray-700">
                    <span class="flex items-center justify-between w-full">
                        <span class="inline-flex items-center">
                            <!-- Heroicon: users -->
                            <svg class="h-6 w-6 mr-2 align-middle " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-8.25c0-4.878-3.982-8.875-8.966-8.875-4.982 0-8.966 3.997-8.966 8.875 0 1.344.333 2.611.956 3.745M15 19.128v-3.386m0-10.447c1.502.503 2.914 1.243 3.996 2.193m-3.996-2.193c-.504.033-1.01.066-1.518.066-4.982 0-8.966-3.997-8.966-8.875 0-1.344.333-2.611.956-3.745M15 19.128L12 21l-3-1.872v-3.386m3 3.386L12 17.25l-3 1.872" /></svg>
                            <span class="mx-4 font-medium sidebar-text align-middle ">Users</span>
                        </span>
                       
                        <!-- Placeholder for chevron, hidden for non-submenu -->
                        <svg class="h-5 w-5 opacity-0" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </span>
                </a>
            </li>
            <!-- Settings menu with submenu -->
            <li>
                <a data-submenu-toggle="submenu-content" href="#" class="w-full block py-3 px-4 mt-2 hover:bg-gray-700 transition-colors duration-200">
                    <span class="flex items-center justify-between w-full">
                        <span class="inline-flex items-center">
                            <!-- Heroicon: cog-6-tooth -->
                            <svg class="h-6 w-6 mr-2 align-middle " xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6h9.75M10.5 6a1.5 1.5 0 11-3 0m3 0a1.5 1.5 0 10-3 0M3.75 6H7.5m3 12h9.75m-9.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-3.75 0H7.5m9-6h3.75m-3.75 0a1.5 1.5 0 01-3 0m3 0a1.5 1.5 0 00-3 0m-9.75 0h9.75" /></svg>
                            <span class="mx-4 font-medium sidebar-text align-middle ">Settings</span>
                        </span>
                        <!-- Heroicon: chevron-down -->
                        <svg class="h-5 w-5 transition-transform duration-300 sidebar-text submenu-arrow align-middle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </span>
                </a>
                <ul id="submenu-content" class="hidden bg-gray-700/50">
                    <li><a href="#" class="block py-2 px-16 hover:bg-gray-600 sidebar-text">Profile</a></li>
                    <li><a href="#" class="block py-2 px-16 hover:bg-gray-600 sidebar-text">Billing</a></li>
                    <li><a href="#" class="block py-2 px-16 hover:bg-gray-600 sidebar-text">Security</a></li>
                </ul>
            </li>
            <!-- Post menu with submenu -->
            <li>
                <a data-submenu-toggle="postmenu-content" href="#" class="w-full block py-3 px-4 mt-2 hover:bg-gray-700 transition-colors duration-200">
                    <span class="flex items-center justify-between w-full">
                        <span class="inline-flex items-center">
                            <!-- Heroicon: document-text -->
                            <svg class="h-6 w-6 mr-2 align-middle" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M19.5 14.25v-6.75A2.25 2.25 0 0 0 17.25 5.25h-10.5A2.25 2.25 0 0 0 4.5 7.5v9A2.25 2.25 0 0 0 6.75 18.75h10.5A2.25 2.25 0 0 0 19.5 16.5v-2.25m-7.5-6.75h3.75m-3.75 3h3.75m-3.75 3h3.75" /></svg>
                            <span class="mx-4 font-medium sidebar-text align-middle">Post</span>
                        </span>
                        <!-- Heroicon: chevron-down -->
                        <svg class="h-5 w-5 transition-transform duration-300 sidebar-text submenu-arrow align-middle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd" /></svg>
                    </span>
                </a>
                <ul id="postmenu-content" class="hidden bg-gray-700/50">
                    <li><a href="{{ route('posts.create') }}" class="block py-2 px-16 hover:bg-gray-600 sidebar-text">Create Post</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</div>

<style>
    .active-link {
        background-color: #374151;
        border-right: 4px solid #3b82f6;
    }
</style>
