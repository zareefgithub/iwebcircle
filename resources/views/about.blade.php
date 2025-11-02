@extends('layouts.app')

@php
    $metaTitle = 'About Us - iWebCircle | Leading AI SaaS Development Company';
    $metaDescription = 'Learn about iWebCircle, a pioneering AI SaaS development company. We combine cutting-edge technology with industry expertise to deliver transformative solutions.';
@endphp

@section('content')
<!-- Hero Section -->
<section class="pt-32 pb-20 bg-gradient-to-br from-blue-50 via-white to-purple-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <h1 class="text-5xl md:text-6xl font-bold mb-6">
                <span class="bg-gradient-to-r from-blue-600 to-purple-600 bg-clip-text text-transparent">
                    {{ $settings['about_hero_title']->value ?? 'About iWebCircle' }}
                </span>
            </h1>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ $settings['about_hero_subtitle']->value ?? 'We\'re on a mission to make AI accessible and transformative for businesses of all sizes' }}
            </p>
        </div>
    </div>
</section>

<!-- Company Story -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-center">
            <div>
                <h2 class="text-4xl font-bold text-gray-900 mb-6">{{ $settings['about_story_title']->value ?? 'Our Story' }}</h2>
                <div class="space-y-4 text-gray-600 text-lg leading-relaxed">
                    <p>
                        {{ $settings['about_story_paragraph1']->value ?? 'Founded in 2019, iWebCircle emerged from a simple observation: businesses were struggling to harness the power of artificial intelligence. We saw incredible potential being left untapped because AI seemed too complex, too expensive, or too risky.' }}
                    </p>
                    <p>
                        {{ $settings['about_story_paragraph2']->value ?? 'Our founders, a team of AI researchers and software engineers, decided to bridge this gap. We set out to build a company that could translate cutting-edge AI research into practical, scalable SaaS solutions that any business could adopt.' }}
                    </p>
                    <p>
                        {{ $settings['about_story_paragraph3']->value ?? 'Today, we\'ve helped over 50 companies transform their operations with AI. From startups to enterprises, our clients trust us to deliver intelligent solutions that drive real business value.' }}
                    </p>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square bg-gradient-to-br from-blue-100 to-purple-100 rounded-2xl flex items-center justify-center">
                    <svg class="w-64 h-64 text-blue-300" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.663 17h4.673M12 3v1m6.364 1.636l-.707.707M21 12h-1M4 12H3m3.343-5.657l-.707-.707m2.828 9.9a5 5 0 117.072 0l-.548.547A3.374 3.374 0 0014 18.469V19a2 2 0 11-4 0v-.531c0-.895-.356-1.754-.988-2.386l-.548-.547z"/>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <div class="p-8 bg-white rounded-2xl shadow-lg">
                <div class="w-14 h-14 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">{{ $settings['about_mission_title']->value ?? 'Our Mission' }}</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    {{ $settings['about_mission_content']->value ?? 'To democratize AI technology by building intelligent, accessible SaaS solutions that empower businesses to innovate, automate, and scale with confidence.' }}
                </p>
            </div>
            <div class="p-8 bg-white rounded-2xl shadow-lg">
                <div class="w-14 h-14 bg-gradient-to-br from-purple-500 to-purple-600 rounded-lg flex items-center justify-center mb-6">
                    <svg class="w-7 h-7 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </div>
                <h3 class="text-3xl font-bold text-gray-900 mb-4">{{ $settings['about_vision_title']->value ?? 'Our Vision' }}</h3>
                <p class="text-gray-600 text-lg leading-relaxed">
                    {{ $settings['about_vision_content']->value ?? 'To become the world\'s most trusted partner for AI transformation, where every business—regardless of size—can leverage artificial intelligence to achieve extraordinary results.' }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Core Values -->
<section class="py-20 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">{{ $settings['about_values_title']->value ?? 'Our Core Values' }}</h2>
            <p class="text-xl text-gray-600 max-w-3xl mx-auto">
                {{ $settings['about_values_subtitle']->value ?? 'The principles that guide everything we do' }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="text-center p-8">
                <div class="w-16 h-16 bg-blue-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value1_title']->value ?? 'Innovation First' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value1_content']->value ?? 'We constantly push boundaries, exploring new technologies and methodologies to deliver cutting-edge solutions.' }}
                </p>
            </div>

            <div class="text-center p-8">
                <div class="w-16 h-16 bg-purple-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-purple-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value2_title']->value ?? 'Client Success' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value2_content']->value ?? 'Your success is our success. We measure our achievements by the value we create for our clients.' }}
                </p>
            </div>

            <div class="text-center p-8">
                <div class="w-16 h-16 bg-indigo-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-indigo-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value3_title']->value ?? 'Transparency' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value3_content']->value ?? 'We believe in open communication, honest timelines, and clear expectations throughout every project.' }}
                </p>
            </div>

            <div class="text-center p-8">
                <div class="w-16 h-16 bg-cyan-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-cyan-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4M7.835 4.697a3.42 3.42 0 001.946-.806 3.42 3.42 0 014.438 0 3.42 3.42 0 001.946.806 3.42 3.42 0 013.138 3.138 3.42 3.42 0 00.806 1.946 3.42 3.42 0 010 4.438 3.42 3.42 0 00-.806 1.946 3.42 3.42 0 01-3.138 3.138 3.42 3.42 0 00-1.946.806 3.42 3.42 0 01-4.438 0 3.42 3.42 0 00-1.946-.806 3.42 3.42 0 01-3.138-3.138 3.42 3.42 0 00-.806-1.946 3.42 3.42 0 010-4.438 3.42 3.42 0 00.806-1.946 3.42 3.42 0 013.138-3.138z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value4_title']->value ?? 'Quality Excellence' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value4_content']->value ?? 'We never compromise on quality. Every solution is thoroughly tested, optimized, and built to last.' }}
                </p>
            </div>

            <div class="text-center p-8">
                <div class="w-16 h-16 bg-pink-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-pink-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7h8m0 0v8m0-8l-8 8-4-4-6 6"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value5_title']->value ?? 'Continuous Learning' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value5_content']->value ?? 'AI evolves rapidly, and so do we. We invest heavily in learning, research, and skill development.' }}
                </p>
            </div>

            <div class="text-center p-8">
                <div class="w-16 h-16 bg-green-100 rounded-full flex items-center justify-center mx-auto mb-6">
                    <svg class="w-8 h-8 text-green-600" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"/>
                    </svg>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">{{ $settings['about_value6_title']->value ?? 'Security & Privacy' }}</h3>
                <p class="text-gray-600">
                    {{ $settings['about_value6_content']->value ?? 'We prioritize data security and privacy, implementing best practices to protect your sensitive information.' }}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Why Choose Us -->
<section class="py-20 bg-gradient-to-br from-blue-600 via-blue-500 to-purple-600">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
            <h2 class="text-4xl md:text-5xl font-bold text-white mb-4">{{ $settings['about_why_title']->value ?? 'Why Choose iWebCircle?' }}</h2>
            <p class="text-xl text-blue-100 max-w-3xl mx-auto">
                {{ $settings['about_why_subtitle']->value ?? 'What sets us apart in the AI SaaS development landscape' }}
            </p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <div class="text-center text-white">
                <div class="text-5xl font-bold mb-2">{{ $settings['about_stat1_value']->value ?? '50+' }}</div>
                <div class="text-blue-100">{{ $settings['about_stat1_label']->value ?? 'Successful Projects' }}</div>
            </div>
            <div class="text-center text-white">
                <div class="text-5xl font-bold mb-2">{{ $settings['about_stat2_value']->value ?? '98%' }}</div>
                <div class="text-blue-100">{{ $settings['about_stat2_label']->value ?? 'Client Retention Rate' }}</div>
            </div>
            <div class="text-center text-white">
                <div class="text-5xl font-bold mb-2">{{ $settings['about_stat3_value']->value ?? '24/7' }}</div>
                <div class="text-blue-100">{{ $settings['about_stat3_label']->value ?? 'Technical Support' }}</div>
            </div>
            <div class="text-center text-white">
                <div class="text-5xl font-bold mb-2">{{ $settings['about_stat4_value']->value ?? '5+' }}</div>
                <div class="text-blue-100">{{ $settings['about_stat4_label']->value ?? 'Years of Excellence' }}</div>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">{{ $settings['about_cta_title']->value ?? 'Ready to Work Together?' }}</h2>
        <p class="text-xl text-gray-600 mb-8">
            {{ $settings['about_cta_subtitle']->value ?? 'Let\'s discuss how we can help transform your business with AI' }}
        </p>
        <a href="{{ route('contact') }}" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg font-semibold hover:shadow-xl hover:shadow-blue-500/50 transition transform hover:-translate-y-1">
            Get in Touch
            <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/>
            </svg>
        </a>
    </div>
</section>
@endsection

