@extends('layouts.app')

@php
    $metaTitle = 'iWebCircle - AI-Powered SaaS Solutions & Custom Software Development';
    $metaDescription = 'Transform your business with cutting-edge AI SaaS solutions. We specialize in intelligent automation, machine learning integration, NLP, and custom AI development.';
@endphp

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center justify-center overflow-hidden bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <!-- Animated Background Elements -->
    <div class="absolute inset-0 overflow-hidden">
        <div class="absolute -top-40 -right-40 w-80 h-80 bg-blue-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob"></div>
        <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-purple-400 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-2000"></div>
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-80 h-80 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl opacity-20 animate-blob animation-delay-4000"></div>
    </div>

    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center">
        <div class="space-y-8">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium">
                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                    <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>
                </svg>
                AI-Powered SaaS Excellence
            </div>

            <!-- Main Heading -->
            <h1 class="text-5xl md:text-7xl font-bold">
                <span class="bg-gradient-to-r from-blue-600 via-blue-500 to-purple-600 bg-clip-text text-transparent">
                    Intelligent Solutions
                </span>
                <br>
                <span class="text-gray-900">for Modern Businesses</span>
            </h1>

            <!-- Description -->
            <p class="max-w-3xl mx-auto text-xl md:text-2xl text-gray-600 leading-relaxed">
                Transform your business with cutting-edge AI technology. We build intelligent SaaS solutions that automate workflows, unlock insights, and drive exponential growth.
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row items-center justify-center gap-4 pt-4">
                <a href="{{ route('contact') }}" class="px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg font-semibold hover:shadow-xl hover:shadow-blue-500/50 transition transform hover:-translate-y-1">
                    Get Started Today
                </a>
                <a href="{{ route('products.index') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold border-2 border-blue-600 hover:bg-blue-50 transition">
                    View Our Products
                </a>
            </div>
        </div>
    </div>

    <!-- Scroll Indicator -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 animate-bounce">
        <svg class="w-6 h-6 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 14l-7 7m0 0l-7-7m7 7V3"></path>
        </svg>
    </div>
</section>

<!-- Services Section -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Our AI-Powered Services</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive AI solutions tailored to transform your business operations and accelerate growth
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            <!-- Service 1 -->
            <div class="group p-8 bg-gradient-to-br from-blue-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">AI-Powered Analytics</h3>
                <p class="text-gray-600 mb-4">
                    Turn raw data into actionable insights with advanced AI analytics. Make data-driven decisions with predictive models and real-time intelligence.
                </p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 2 -->
            <div class="group p-8 bg-gradient-to-br from-purple-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Intelligent Automation</h3>
                <p class="text-gray-600 mb-4">
                    Automate complex workflows with intelligent AI agents. Reduce manual work, eliminate errors, and boost productivity across your organization.
                </p>
                <a href="{{ route('services') }}" class="text-purple-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 3 -->
            <div class="group p-8 bg-gradient-to-br from-blue-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-600 to-purple-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Machine Learning Integration</h3>
                <p class="text-gray-600 mb-4">
                    Seamlessly integrate powerful ML models into your existing systems. Enhance applications with computer vision, recommendation engines, and more.
                </p>
                <a href="{{ route('services') }}" class="text-blue-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 4 -->
            <div class="group p-8 bg-gradient-to-br from-indigo-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-indigo-500 to-indigo-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Natural Language Processing</h3>
                <p class="text-gray-600 mb-4">
                    Build intelligent conversational interfaces and extract meaning from text. Create chatbots, sentiment analysis tools, and language understanding systems.
                </p>
                <a href="{{ route('services') }}" class="text-indigo-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 5 -->
            <div class="group p-8 bg-gradient-to-br from-cyan-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-cyan-500 to-cyan-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Custom AI Development</h3>
                <p class="text-gray-600 mb-4">
                    Get bespoke AI solutions designed specifically for your unique business needs. From concept to deployment, we build AI that works for you.
                </p>
                <a href="{{ route('services') }}" class="text-cyan-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>

            <!-- Service 6 -->
            <div class="group p-8 bg-gradient-to-br from-violet-50 to-white rounded-2xl hover:shadow-xl transition duration-300 border border-gray-100">
                <div class="w-14 h-14 bg-gradient-to-br from-violet-500 to-violet-600 rounded-lg flex items-center justify-center mb-6 group-hover:scale-110 transition">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">AI Chatbots & Virtual Assistants</h3>
                <p class="text-gray-600 mb-4">
                    Deploy intelligent conversational AI to engage customers 24/7. Provide instant support, answer queries, and qualify leads automatically.
                </p>
                <a href="{{ route('services') }}" class="text-violet-600 font-semibold inline-flex items-center group-hover:gap-2 transition-all">
                    Learn More
                    <svg class="w-4 h-4 ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- Featured Products Section -->
@if($featuredProjects->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Featured Products</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Discover our powerful AI-powered SaaS products designed to transform your business
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($featuredProjects as $project)
            <a href="{{ route('products.show', $project) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-2xl transition duration-300">
                <div class="aspect-video bg-gradient-to-br from-blue-100 to-purple-100 relative overflow-hidden">
                    @if($project->featured_image)
                        <img src="{{ asset('storage/' . $project->featured_image) }}" alt="{{ $project->title }}" class="w-full h-full object-cover group-hover:scale-110 transition duration-300">
                    @else
                        <div class="w-full h-full flex items-center justify-center">
                            <svg class="w-20 h-20 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                            </svg>
                        </div>
                    @endif
                </div>
                <div class="p-6">
                    <h3 class="text-2xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition">{{ $project->title }}</h3>
                    <p class="text-gray-600 mb-4">{{ Str::limit($project->description, 120) }}</p>
                    @if($project->technologies)
                        <div class="flex flex-wrap gap-2">
                            @foreach($project->technologies as $tech)
                                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm">{{ $tech }}</span>
                            @endforeach
                        </div>
                    @endif
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('products.index') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold border-2 border-blue-600 hover:bg-blue-50 transition">
                View All Products
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

<!-- Latest Blog Posts -->
@if($latestPosts->count() > 0)
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Latest Insights</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Stay updated with the latest trends, tutorials, and insights in AI and technology
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            @foreach($latestPosts as $post)
            <a href="{{ route('blog.show', $post) }}" class="group block bg-white rounded-2xl overflow-hidden hover:shadow-xl transition duration-300">
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
                    <div class="text-sm text-blue-600 font-semibold mb-2">{{ $post->published_at->format('M d, Y') }}</div>
                    <h3 class="text-xl font-bold text-gray-900 mb-2 group-hover:text-blue-600 transition">{{ $post->title }}</h3>
                    <p class="text-gray-600">{{ Str::limit($post->excerpt, 100) }}</p>
                </div>
            </a>
            @endforeach
        </div>

        <div class="text-center mt-12">
            <a href="{{ route('blog.index') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold border-2 border-blue-600 hover:bg-blue-50 transition">
                Read More Articles
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Ready to Transform Your Business?</h2>
        <p class="text-xl text-blue-100 max-w-3xl mx-auto mb-8">
            Let's build something amazing together. Get in touch with our team and discover how AI can revolutionize your operations.
        </p>
        <div class="flex flex-col sm:flex-row items-center justify-center gap-4">
            <a href="{{ route('contact') }}" class="px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:shadow-xl hover:shadow-blue-900/50 transition transform hover:-translate-y-1">
                Start Your Project
            </a>
            <a href="{{ route('services') }}" class="px-8 py-4 bg-transparent text-white rounded-lg font-semibold border-2 border-white hover:bg-white hover:text-blue-600 transition">
                Explore Services
            </a>
        </div>
    </div>
</section>

@push('styles')
<style>
    @keyframes blob {
        0%, 100% {
            transform: translate(0, 0) scale(1);
        }
        33% {
            transform: translate(30px, -50px) scale(1.1);
        }
        66% {
            transform: translate(-20px, 20px) scale(0.9);
        }
    }
    
    .animate-blob {
        animation: blob 7s infinite;
    }
    
    .animation-delay-2000 {
        animation-delay: 2s;
    }
    
    .animation-delay-4000 {
        animation-delay: 4s;
    }
</style>
@endpush
@endsection

