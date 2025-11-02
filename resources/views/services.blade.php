@extends('layouts.app')

@php
    $metaTitle = 'AI SaaS Services - Machine Learning, Automation & Custom AI Development | iWebCircle';
    $metaDescription = 'Explore our comprehensive AI SaaS services including intelligent automation, machine learning integration, NLP solutions, AI analytics, and custom AI development.';
@endphp

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    Our AI Services
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                Comprehensive AI-powered solutions designed to transform your business operations and drive growth
            </p>
        </div>
    </div>
</section>

<!-- Services -->
<section id="analytics" class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-blue-100 text-blue-700 text-sm font-medium mb-6">
                    Service 01
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">AI-Powered Analytics & Insights</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Transform raw data into actionable intelligence with our advanced AI analytics platform. Make confident, data-driven decisions with predictive models and real-time insights.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Predictive analytics and forecasting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Real-time dashboards and reporting</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Customer behavior analysis</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-blue-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Anomaly detection and alerts</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Service 2 -->
        <div id="automation" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
            <div class="order-2 lg:order-1 relative">
                <div class="aspect-square bg-gradient-to-br from-purple-100 to-pink-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-purple-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-purple-100 text-purple-700 text-sm font-medium mb-6">
                    Service 02
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Intelligent Automation Solutions</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Streamline operations and boost productivity with AI-powered automation. Eliminate manual tasks, reduce errors, and free your team to focus on strategic work.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Workflow automation and optimization</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Document processing and data extraction</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Intelligent task routing and assignment</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-purple-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Process mining and improvement suggestions</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-purple-600 to-purple-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Service 3 -->
        <div id="ml" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-indigo-100 text-indigo-700 text-sm font-medium mb-6">
                    Service 03
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Machine Learning Integration</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Enhance your applications with powerful ML capabilities. From recommendation engines to computer vision, we integrate state-of-the-art models seamlessly into your systems.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Computer vision and image recognition</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Recommendation systems</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Fraud detection and security</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-indigo-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Speech recognition and synthesis</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-indigo-600 to-indigo-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-indigo-100 to-blue-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-indigo-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Service 4 -->
        <div id="nlp" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
            <div class="order-2 lg:order-1 relative">
                <div class="aspect-square bg-gradient-to-br from-cyan-100 to-teal-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-cyan-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z"/>
                    </svg>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-cyan-100 text-cyan-700 text-sm font-medium mb-6">
                    Service 04
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Natural Language Processing</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Extract meaning from text and build intelligent conversational interfaces. Create chatbots, sentiment analysis tools, and language understanding systems that truly comprehend context.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-cyan-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Sentiment analysis and opinion mining</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-cyan-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Named entity recognition and extraction</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-cyan-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Text summarization and generation</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-cyan-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Language translation services</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-cyan-600 to-cyan-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>

        <!-- Service 5 -->
        <div id="custom" class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center mb-32">
            <div>
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-violet-100 text-violet-700 text-sm font-medium mb-6">
                    Service 05
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Custom AI Development</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Get bespoke AI solutions designed specifically for your unique business needs. From concept to deployment, we build AI that solves your specific challenges.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-violet-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Custom model development and training</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-violet-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">End-to-end AI solution architecture</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-violet-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Legacy system AI integration</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-violet-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Model optimization and deployment</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-violet-600 to-violet-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-violet-100 to-purple-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-violet-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4"/>
                    </svg>
                </div>
            </div>
        </div>

        <!-- Service 6 -->
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div class="order-2 lg:order-1 relative">
                <div class="aspect-square bg-gradient-to-br from-pink-100 to-rose-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-pink-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/>
                    </svg>
                </div>
            </div>
            <div class="order-1 lg:order-2">
                <div class="inline-flex items-center px-4 py-2 rounded-full bg-pink-100 text-pink-700 text-sm font-medium mb-6">
                    Service 06
                </div>
                <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">AI Chatbots & Virtual Assistants</h2>
                <p class="text-xl text-gray-600 mb-8 leading-relaxed">
                    Deploy intelligent conversational AI to engage customers 24/7. Provide instant support, answer queries, qualify leads, and enhance customer experience with human-like interactions.
                </p>
                <ul class="space-y-4 mb-8">
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Multi-channel chatbot deployment</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Voice-enabled virtual assistants</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Intent recognition and dialogue management</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-6 h-6 text-pink-600 mr-3 mt-1 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                        </svg>
                        <span class="text-gray-700">Seamless human handoff capabilities</span>
                    </li>
                </ul>
                <a href="{{ route('contact') }}" class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-pink-600 to-pink-500 text-white rounded-lg font-semibold hover:shadow-lg transition">
                    Get Started
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-white mb-6">Let's Build Something Amazing</h2>
        <p class="text-xl text-blue-100 mb-8">
            Ready to transform your business with AI? Get in touch with our team today
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-white text-blue-600 rounded-lg font-semibold hover:shadow-xl hover:shadow-blue-900/50 transition transform hover:-translate-y-1">
            Start Your Project
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection

