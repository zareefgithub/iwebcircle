@extends('layouts.app')

@php
    $metaTitle = $product->title . ' - AI SaaS Product | iWebCircle';
    $metaDescription = Str::limit($product->description, 155);
@endphp

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('products.index') }}" class="text-gray-500 hover:text-blue-600">Products</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-medium">{{ $product->title }}</li>
            </ol>
        </nav>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $product->title }}</h1>
        
        @if($product->client_name)
            <p class="text-xl text-gray-600 mb-6">Client: {{ $product->client_name }}</p>
        @endif

        <div class="flex flex-wrap gap-3 mb-8">
            @if($product->technologies)
                @foreach($product->technologies as $tech)
                    <span class="px-4 py-2 bg-blue-100 text-blue-700 rounded-lg font-medium">{{ $tech }}</span>
                @endforeach
            @endif
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($product->featured_image)
<section class="py-8 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
            <img src="{{ asset('storage/' . $product->featured_image) }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
        </div>
    </div>
</section>
@endif

<!-- Product Content -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Overview</h2>
            <p class="text-xl text-gray-600 mb-8">{{ $product->description }}</p>

            <div class="mt-12">
                {!! nl2br(e($product->content)) !!}
            </div>
        </div>

        @if($product->project_url)
            <div class="mt-12 pt-8 border-t border-gray-200">
                <a href="{{ $product->project_url }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    View Product
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"/>
                    </svg>
                </a>
            </div>
        @endif
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600 rounded-2xl p-12 text-center">
            <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Interested in This Product?</h2>
            <p class="text-xl text-blue-100 mb-8">
                Get in touch to learn more or request a personalized demo
            </p>
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:shadow-xl transition">
                    Request Demo
                </a>
                <a href="{{ route('products.index') }}" class="px-8 py-4 bg-transparent text-white rounded-lg font-semibold border-2 border-white hover:bg-white hover:text-blue-600 transition">
                    View All Products
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Navigation -->
<section class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="{{ route('products.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Products
            </a>
            <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-blue-600 text-white rounded-lg font-semibold hover:bg-blue-700 transition">
                Get in Touch
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endsection

