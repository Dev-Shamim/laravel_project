@extends('layouts.app')

@section('title', 'Categories')

@section('content')
    <div class="container mx-auto px-4 py-8">
        <h2 class="text-3xl font-bold mb-8 text-gray-800 border-b pb-2">Categories</h2>
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Web Development</h3>
                    <p class="text-gray-600">12 Articles</p>
                </div>
            </a>
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Artificial Intelligence</h3>
                    <p class="text-gray-600">8 Articles</p>
                </div>
            </a>
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Cloud Computing</h3>
                    <p class="text-gray-600">5 Articles</p>
                </div>
            </a>
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Cybersecurity</h3>
                    <p class="text-gray-600">7 Articles</p>
                </div>
            </a>
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">Mobile Development</h3>
                    <p class="text-gray-600">6 Articles</p>
                </div>
            </a>
            <a href="#" class="bg-white rounded-lg overflow-hidden shadow-md hover:shadow-lg transition block">
                <div class="p-6">
                    <h3 class="text-xl font-bold mb-2 text-gray-800">DevOps</h3>
                    <p class="text-gray-600">4 Articles</p>
                </div>
            </a>
        </div>
    </div>
@endsection