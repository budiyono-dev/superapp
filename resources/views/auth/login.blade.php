@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-center text-gray-800">Login</h2>
        <form method="POST" action="{{ route('login') }}" class="space-y-4">
            @csrf
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required autofocus>
            </div>
            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="login-password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 pr-10" required>
                    <button type="button" id="btn-toggle-pwd-login" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 focus:outline-none">
                        <span class="text-grey-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.816-.642 1.582-1.104 2.276M15.362 17.362A9.958 9.958 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.638-4.362" /></svg>
                        </span>
                    </button>
                </div>
            </div>
            <button type="submit" class="w-full py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">Login</button>
            <div class="flex justify-between mt-2">
            </div>
        </form>
    </div>
</div>
@endsection
