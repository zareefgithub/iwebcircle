<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
    <title>{{ $metaTitle ?? 'iWebCircle - AI-Powered SaaS Solutions' }}</title>
    <meta name="description" content="{{ $metaDescription ?? 'Transform your business with cutting-edge AI SaaS solutions. iWebCircle delivers intelligent automation, machine learning integration, and custom AI development.' }}">
    <meta name="keywords" content="AI SaaS, machine learning, artificial intelligence, software development, AI automation">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="{{ $metaTitle ?? 'iWebCircle - AI-Powered SaaS Solutions' }}">
    <meta property="og:description" content="{{ $metaDescription ?? 'Transform your business with cutting-edge AI SaaS solutions.' }}">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="{{ $metaTitle ?? 'iWebCircle - AI-Powered SaaS Solutions' }}">
    <meta property="twitter:description" content="{{ $metaDescription ?? 'Transform your business with cutting-edge AI SaaS solutions.' }}">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <link rel="canonical" href="{{ url()->current() }}">
    
    <!-- Organization Schema -->
    <script type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "iWebCircle",
        "url": "{{ url('/') }}",
        "logo": "{{ asset('images/logo.png') }}",
        "description": "AI-powered SaaS solutions and custom software development company specializing in machine learning, automation, and intelligent systems.",
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "123 Innovation Drive",
            "addressLocality": "San Francisco",
            "addressRegion": "CA",
            "postalCode": "94105",
            "addressCountry": "US"
        },
        "contactPoint": {
            "@type": "ContactPoint",
            "telephone": "+1-555-123-4567",
            "contactType": "Customer Service",
            "email": "contact@iwebcircle.com"
        },
        "sameAs": [
            "https://twitter.com/iwebcircle",
            "https://linkedin.com/company/iwebcircle",
            "https://github.com/iwebcircle"
        ]
    }
    </script>
    
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    @stack('styles')
    @stack('schema')
</head>
<body class="antialiased bg-white text-gray-900">
    <!-- Navigation -->
    <nav class="fixed w-full z-50 top-0 bg-white/80 backdrop-blur-md border-b border-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between items-center h-20">
                <!-- Logo -->
                <a href="{{ route('home') }}" class="flex items-center space-x-2">
                    <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg">
                        <span class="text-white font-bold text-xl">iW</span>
                    </div>
                    <span class="text-2xl font-bold bg-gradient-to-r from-blue-600 to-blue-500 bg-clip-text text-transparent">iWebCircle</span>
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="{{ route('home') }}" class="text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
                    <a href="{{ route('about') }}" class="text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : '' }}">About</a>
                    <a href="{{ route('services') }}" class="text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('services') ? 'text-blue-600 font-semibold' : '' }}">Services</a>
                    <a href="{{ route('products.index') }}" class="text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('products.*') ? 'text-blue-600 font-semibold' : '' }}">Products</a>
                    <a href="{{ route('blog.index') }}" class="text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('blog.*') ? 'text-blue-600 font-semibold' : '' }}">Blog</a>
                    <a href="{{ route('contact') }}" class="bg-gradient-to-r from-blue-600 to-blue-500 text-white px-6 py-2.5 rounded-lg hover:shadow-lg hover:shadow-blue-500/50 transition">Contact Us</a>
                </div>

                <!-- Mobile Menu Button -->
                <button id="mobile-menu-button" class="md:hidden text-gray-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-white border-t border-gray-100">
            <div class="px-4 py-4 space-y-3">
                <a href="{{ route('home') }}" class="block text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('home') ? 'text-blue-600 font-semibold' : '' }}">Home</a>
                <a href="{{ route('about') }}" class="block text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('about') ? 'text-blue-600 font-semibold' : '' }}">About</a>
                <a href="{{ route('services') }}" class="block text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('services') ? 'text-blue-600 font-semibold' : '' }}">Services</a>
                <a href="{{ route('products.index') }}" class="block text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('products.*') ? 'text-blue-600 font-semibold' : '' }}">Products</a>
                <a href="{{ route('blog.index') }}" class="block text-gray-700 hover:text-blue-600 transition {{ request()->routeIs('blog.*') ? 'text-blue-600 font-semibold' : '' }}">Blog</a>
                <a href="{{ route('contact') }}" class="block bg-gradient-to-r from-blue-600 to-blue-500 text-white px-6 py-2.5 rounded-lg text-center">Contact Us</a>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="pt-20">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div class="col-span-1 md:col-span-2">
                    <div class="flex items-center space-x-2 mb-4">
                        <div class="flex items-center justify-center w-10 h-10 bg-gradient-to-br from-blue-500 to-blue-600 rounded-lg">
                            <span class="text-white font-bold text-xl">iW</span>
                        </div>
                        <span class="text-2xl font-bold text-white">iWebCircle</span>
                    </div>
                    <p class="text-gray-400 mb-4 max-w-md">
                        Transforming businesses with cutting-edge AI SaaS solutions. We build intelligent, scalable software that drives innovation and growth.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                        </a>
                        <a href="#" class="text-gray-400 hover:text-blue-500 transition">
                            <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                        </a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h3 class="text-white font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('about') }}" class="text-gray-400 hover:text-blue-500 transition">About Us</a></li>
                        <li><a href="{{ route('services') }}" class="text-gray-400 hover:text-blue-500 transition">Our Services</a></li>
                        <li><a href="{{ route('products.index') }}" class="text-gray-400 hover:text-blue-500 transition">Products</a></li>
                        <li><a href="{{ route('blog.index') }}" class="text-gray-400 hover:text-blue-500 transition">Blog</a></li>
                        <li><a href="{{ route('contact') }}" class="text-gray-400 hover:text-blue-500 transition">Contact</a></li>
                    </ul>
                </div>

                <!-- Services -->
                <div>
                    <h3 class="text-white font-semibold mb-4">Services</h3>
                    <ul class="space-y-2">
                        <li><a href="{{ route('services') }}#analytics" class="text-gray-400 hover:text-blue-500 transition">AI Analytics</a></li>
                        <li><a href="{{ route('services') }}#automation" class="text-gray-400 hover:text-blue-500 transition">Automation</a></li>
                        <li><a href="{{ route('services') }}#ml" class="text-gray-400 hover:text-blue-500 transition">Machine Learning</a></li>
                        <li><a href="{{ route('services') }}#nlp" class="text-gray-400 hover:text-blue-500 transition">NLP Solutions</a></li>
                        <li><a href="{{ route('services') }}#custom" class="text-gray-400 hover:text-blue-500 transition">Custom AI Dev</a></li>
                    </ul>
                </div>
            </div>

            <div class="border-t border-gray-800 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; {{ date('Y') }} iWebCircle. All rights reserved. Built with ❤️ and AI.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        document.getElementById('mobile-menu-button')?.addEventListener('click', function() {
            const menu = document.getElementById('mobile-menu');
            menu.classList.toggle('hidden');
        });
    </script>

    @stack('scripts')
</body>
</html>

