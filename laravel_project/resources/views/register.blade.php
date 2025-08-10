@extends('layouts.app')

@section('title', 'Register')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="max-w-md mx-auto bg-white rounded-lg shadow-md p-6">
            <h2 class="text-2xl font-bold mb-4">Register</h2>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="mb-4">
                    <label for="name" class="block text-gray-700 font-bold mb-2">Name</label>
                    <input type="text" id="name" name="name" class="w-full px-4 py-2 border rounded-md" required autofocus>
                </div>
                <div class="mb-4">
                    <label for="email" class="block text-gray-700 font-bold mb-2">Email</label>
                    <input type="email" id="email" name="email" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="password" class="block text-gray-700 font-bold mb-2">Password</label>
                    <input type="password" id="password" name="password" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <div class="mb-4">
                    <label for="password_confirmation" class="block text-gray-700 font-bold mb-2">Confirm Password</label>
                    <input type="password" id="password_confirmation" name="password_confirmation" class="w-full px-4 py-2 border rounded-md" required>
                </div>
                <button type="submit" class="w-full bg-blue-600 text-white py-2 rounded-md hover:bg-blue-700">Register</button>
            </form>
        </div>
    </div>
@endsection