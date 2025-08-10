@extends('layouts.app')

@section('title', 'Single Blog')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <div class="bg-white rounded-lg shadow-md overflow-hidden">
            <img src="https://placehold.co/1200x400/png" alt="Blog Post Image" class="w-full h-64 object-cover">
            <div class="p-6">
                <div class="flex items-center text-sm text-gray-500 mb-4">
                    <span class="bg-blue-100 text-blue-800 px-2 py-1 rounded-md text-xs">Web Development</span>
                    <span class="mx-2">•</span>
                    <span>July 5, 2023</span>
                    <span class="mx-2">•</span>
                    <span>7 min read</span>
                </div>
                <h1 class="text-4xl font-bold mb-4 text-gray-800">React 18: What's New and Improved</h1>
                <div class="prose max-w-full">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
        </div>
    </div>
@endsection