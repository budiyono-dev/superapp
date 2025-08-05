@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-3xl font-semibold text-gray-800">Dashboard</h1>
    <p class="mt-2 text-gray-600">Welcome to your dashboard. Here's a quick overview of your application.</p>

    <!-- Stats Cards -->
    <div class="mt-8 grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-blue-500 rounded-full">
                    <!-- Heroicon: users -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 002.625.372 9.337 9.337 0 004.121-8.25c0-4.878-3.982-8.875-8.966-8.875-4.982 0-8.966 3.997-8.966 8.875 0 1.344.333 2.611.956 3.745M15 19.128v-3.386m0-10.447c1.502.503 2.914 1.243 3.996 2.193m-3.996-2.193c-.504.033-1.01.066-1.518.066-4.982 0-8.966-3.997-8.966-8.875 0-1.344.333-2.611.956-3.745M15 19.128L12 21l-3-1.872v-3.386m3 3.386L12 17.25l-3 1.872" /></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-600">New Users</p>
                    <p class="text-2xl font-bold text-gray-800">1,250</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-green-500 rounded-full">
                    <!-- Heroicon: shopping-cart -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c.51 0 .962-.343 1.087-.835l1.823-6.44a1.125 1.125 0 00-1.087-1.462H5.25l-.838-3.141A1.125 1.125 0 003.375 3H2.25" /></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-600">Sales</p>
                    <p class="text-2xl font-bold text-gray-800">$12,345</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-yellow-500 rounded-full">
                    <!-- Heroicon: clipboard-document-list -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" /></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-600">Pending Tasks</p>
                    <p class="text-2xl font-bold text-gray-800">42</p>
                </div>
            </div>
        </div>
        <div class="bg-white p-6 rounded-lg shadow-md">
            <div class="flex items-center">
                <div class="p-3 bg-red-500 rounded-full">
                    <!-- Heroicon: bug-ant -->
                    <svg class="h-6 w-6 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.362-3.797z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15.362 5.214A8.252 8.252 0 0112 21 8.25 8.25 0 016.038 7.048 8.287 8.287 0 009 9.6a8.983 8.983 0 013.362-3.797zM15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
                <div class="ml-4">
                    <p class="text-gray-600">Open Tickets</p>
                    <p class="text-2xl font-bold text-gray-800">15</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content Area -->
    <div class="mt-8 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-xl font-semibold text-gray-800 mb-4">Recent Activity</h2>
        <div class="h-64 bg-gray-200 rounded-md flex items-center justify-center">
            <p class="text-gray-500">Chart or Data Table will go here.</p>
        </div>
    </div>
@endsection
