@extends('layouts.app')

@php
    $metaTitle = 'Blog - AI Insights, Tutorials & Industry Trends | iWebCircle';
    $metaDescription = 'Stay updated with the latest AI trends, tutorials, and insights. Learn about machine learning, automation, NLP, and cutting-edge AI technologies.';
@endphp

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Our Blog
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Insights, tutorials, and the latest trends in AI and software development
            </p>
        </div>
    </div>
</section>

<!-- Blog Grid -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        @if($posts->count() > 0)
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 mb-12">
                @foreach($posts as $post)
                <article>
                    <a href="{{ route('blog.show', $post) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition duration-300 border border-gray-100">
                        <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100 relative overflow-hidden">
                            @if($post->featured_image)
                                <img src="{{ asset('storage/' . $post->featured_image) }}" alt="{{ $post->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                            @else
                                <div class="w-full h-full flex items-center justify-center">
                                    <svg class="w-20 h-20 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                                    </svg>
                                </div>
                            @endif
                        </div>
                        <div class="p-6">
                            <div class="flex items-center text-sm text-gray-500 mb-3">
                                <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"/>
                                </svg>
                                {{ $post->published_at->format('M d, Y') }}
                            </div>
                            <h2 class="text-2xl font-bold text-gray-900 mb-3 group-hover:text-blue-600 transition">{{ $post->title }}</h2>
                            <p class="text-gray-600 mb-4">{{ Str::limit($post->excerpt, 120) }}</p>
                            <span class="text-blue-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                                Read More
                                <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                </svg>
                            </span>
                        </div>
                    </a>
                </article>
                @endforeach
            </div>

            <!-- Pagination -->
            <div class="mt-12">
                {{ $posts->links() }}
            </div>
        @else
            <div class="text-center py-20">
                <svg class="w-24 h-24 text-gray-300 mx-auto mb-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z"/>
                </svg>
                <h3 class="text-2xl font-bold text-gray-900 mb-2">No Posts Yet</h3>
                <p class="text-gray-600">Check back soon for our latest insights!</p>
            </div>
        @endif
    </div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Stay Updated</h2>
        <p class="text-xl text-blue-100 mb-8">
            Subscribe to our newsletter for the latest AI insights and updates
        </p>
        <div class="max-w-md mx-auto">
            <form class="flex flex-col sm:flex-row gap-3">
                <input type="email" placeholder="Your email address" class="flex-1 px-6 py-4 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-300" required>
                <button type="submit" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:shadow-xl transition">
                    Subscribe
                </button>
            </form>
        </div>
    </div>
</section>
@endsection

