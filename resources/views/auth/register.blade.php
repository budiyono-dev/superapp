@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-center text-gray-800">Register</h2>
        <form method="POST" action="{{ route('register') }}" class="space-y-4">
            @csrf
            <div>
                <label for="name" class="block mb-1 text-sm font-medium text-gray-700">Name</label>
                <input type="text" name="name" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required autofocus>
            </div>
            <div>
                <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                <input type="email" name="email" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required>
            </div>
            <div>
                <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                <div class="relative">
                    <input type="password" id="password" name="password" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 pr-10" required>
                    <button type="button" onclick="togglePassword('password', this)" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 focus:outline-none">
                        <span class="text-grey-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.816-.642 1.582-1.104 2.276M15.362 17.362A9.958 9.958 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.638-4.362" /></svg>
                        </span>
                    </button>
                </div>
            </div>
            <div>
                <label for="password_confirmation" class="block mb-1 text-sm font-medium text-gray-700">Confirm Password</label>
                <div class="relative">
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300 pr-10" required>
                    <button type="button" onclick="togglePassword('password_confirmation', this)" class="absolute inset-y-0 right-0 flex items-center px-3 text-gray-600 focus:outline-none">
                        <span class="text-grey-600">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.477 0 8.268 2.943 9.542 7-.274.816-.642 1.582-1.104 2.276M15.362 17.362A9.958 9.958 0 0112 19c-4.477 0-8.268-2.943-9.542-7a9.956 9.956 0 012.638-4.362" /></svg>
                        </span>
                    </button>
                </div>
            </div>
            <button type="submit" class="w-full py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">Register</button>
            <div class="flex justify-between mt-2">
                <a href="{{ route('login') }}" class="text-sm text-blue-600 hover:underline">Login</a>
            </div>
        </form>
    </div>
</div>
@endsection
@section('scripts')
<script>
function togglePassword(fieldId, btn) {
    var input = document.getElementById(fieldId);
    var btnIcon = btn.querySelector('span');
    if (input.type === 'password') {
        input.type = 'text';
        btnIcon.classList.toggle('text-grey-600');
        btnIcon.classList.toggle('text-blue-600');
    } else {
        input.type = 'password';
        btnIcon.classList.toggle('text-grey-600');
        btnIcon.classList.toggle('text-blue-600');

    }
}
</script>
@endsection
