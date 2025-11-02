@extends('layouts.app')

@php
    $metaTitle = 'AI SaaS Products - Intelligent Solutions for Your Business | iWebCircle';
    $metaDescription = 'Explore our portfolio of AI-powered SaaS products. Intelligent automation, machine learning solutions, and custom AI tools designed to transform your business.';
@endphp

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Our Products
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover our suite of AI-powered SaaS products designed to streamline operations, boost productivity, and drive innovation
            </p>
        </div>
    </div>
</section>

<!-- Products Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($products->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($products as $product)
                <a href="{{ route('products.show', $product) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-100">
                    <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100 relative overflow-hidden">
                        @if($product->featured_image)
                            <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                        @else
                            <div class="w-full h-full flex items-center justify-center">
                                <svg class="w-20 h-20 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                                </svg>
                            </div>
                        @endif
                        @if($product->is_featured)
                            <div class="absolute top-4 right-4 px-3 py-1 bg-blue-600 text-white rounded-full text-sm font-semibold">
                                Featured
                            </div>
                        @endif
                    </div>
                    <div class="p-6">
                        <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition">{{ $product->title }}</h3>
                        @if($product->client_name)
                            <p class="text-sm text-gray-500 mb-3">Client: {{ $product->client_name }}</p>
                        @endif
                        <p class="text-gray-600 mb-4">{{ Str::limit($product->description, 120) }}</p>
                        @if($product->technologies)
                            <div class="flex flex-wrap gap-2">
                                @foreach($product->technologies as $tech)
                                    <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">{{ $tech }}</span>
                                @endforeach
                            </div>
                        @endif
                    </div>
                </a>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $products->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4"/>
                </svg>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">Products Coming Soon</h3>
                <p class="text-gray-600 mb-6">We're working on exciting new AI-powered products!</p>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                    Get Notified
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl text-blue-100 mb-8">
            Discover how our AI-powered products can revolutionize your operations
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:shadow-xl hover:shadow-blue-900/50 transition transform hover:-translate-y-1">
            Request a Demo
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection

