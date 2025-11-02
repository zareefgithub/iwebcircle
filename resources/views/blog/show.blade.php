@extends('layouts.app')

@php
    $metaTitle = ($post->meta_title ?? $post->title) . ' | iWebCircle Blog';
    $metaDescription = $post->meta_description ?? Str::limit($post->excerpt, 155);
@endphp

@push('schema')
<script type="application/ld+json">
{
    "@context": "https://schema.org",
    "@type": "BlogPosting",
    "headline": "{{ $post->title }}",
    "description": "{{ $post->excerpt }}",
    "datePublished": "{{ $post->published_at->toIso8601String() }}",
    "dateModified": "{{ $post->updated_at->toIso8601String() }}",
    "author": {
        "@type": "Organization",
        "name": "iWebCircle"
    },
    "publisher": {
        "@type": "Organization",
        "name": "iWebCircle",
        "logo": {
            "@type": "ImageObject",
            "url": "{{ asset('images/logo.png') }}"
        }
    },
    "mainEntityOfPage": {
        "@type": "WebPage",
        "@id": "{{ route('blog.show', $post) }}"
    }
}
</script>
@endpush

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-12 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Breadcrumb -->
        <nav class="mb-8">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="{{ route('home') }}" class="text-gray-500 hover:text-blue-600">Home</a></li>
                <li class="text-gray-400">/</li>
                <li><a href="{{ route('blog.index') }}" class="text-gray-500 hover:text-blue-600">Blog</a></li>
                <li class="text-gray-400">/</li>
                <li class="text-gray-900 font-medium">{{ Str::limit($post->title, 50) }}</li>
            </ol>
        </nav>

        <h1 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $post->title }}</h1>
        
        <div class="flex items-center text-gray-600">
            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
            </svg>
            <time datetime="{{ $post->published_at->format('Y-m-d') }}">
                {{ $post->published_at->format('F d, Y') }}
            </time>
        </div>
    </div>
</section>

<!-- Featured Image -->
@if($post->featured_image)
<section class="py-8 bg-white">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="aspect-video rounded-2xl overflow-hidden shadow-2xl">
            <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover">
        </div>
    </div>
</section>
@endif

<!-- Article Content -->
<article class="py-12 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="prose prose-lg max-w-none">
            <div class="text-xl text-gray-700 leading-relaxed mb-8 font-medium">
                {{ $post->excerpt }}
            </div>

            <div class="mt-8">
                {!! nl2br(e($post->content)) !!}
            </div>
        </div>

        <!-- Share Section -->
        <div class="mt-12 pt-8 border-t border-gray-200">
            <h3 class="text-lg font-semibold text-gray-900 mb-4">Share this article</h3>
            <div class="flex space-x-4">
                <a href="https://twitter.com/intent/tweet?url={{ urlencode(route('blog.show', $post)) }}&text={{ urlencode($post->title) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/>
                    </svg>
                    Twitter
                </a>
                <a href="https://www.linkedin.com/sharing/share-offsite/?url={{ urlencode(route('blog.show', $post)) }}" target="_blank" rel="noopener noreferrer" class="inline-flex items-center px-4 py-2 bg-blue-700 text-white rounded-lg hover:bg-blue-800 transition">
                    <svg class="w-5 h-5 mr-2" fill="currentColor" viewBox="0 0 24 24">
                        <path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/>
                    </svg>
                    LinkedIn
                </a>
            </div>
        </div>
    </div>
</article>

<!-- Navigation -->
<section class="py-12 bg-gray-50">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center text-blue-600 hover:text-blue-700 font-semibold">
                <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/>
                </svg>
                Back to Blog
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

