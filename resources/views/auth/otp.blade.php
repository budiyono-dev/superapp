@extends('layouts.app')
@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md p-8 space-y-6 bg-white rounded shadow">
        <h2 class="text-2xl font-bold text-center text-gray-800">Enter OTP</h2>
        <form method="POST" action="{{ route('otp.verify') }}" class="space-y-4">
            @csrf
            <div>
                <label for="otp" class="block mb-1 text-sm font-medium text-gray-700">OTP</label>
                <input type="text" name="otp" class="w-full px-3 py-2 border rounded focus:outline-none focus:ring focus:border-blue-300" required autofocus>
            </div>
            <button type="submit" class="w-full py-2 font-semibold text-white bg-blue-600 rounded hover:bg-blue-700">Verify OTP</button>
        </form>
    </div>
</div>
@endsection
