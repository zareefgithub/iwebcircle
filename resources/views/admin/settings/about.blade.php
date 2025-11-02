@extends('admin.layout')

@section('title', 'About Page Settings')
@section('page-title', 'About Page Settings')

@section('content')
<div class="max-w-5xl">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-2">Edit About Page Content</h2>
            <p class="text-gray-600">Manage all content displayed on your About Us page.</p>
        </div>

        <form method="POST" action="{{ route('admin.settings.about.update') }}" class="space-y-8">
            @csrf
            @method('PUT')

            <!-- Hero Section -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Hero Section</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="about_hero_title" class="block text-sm font-medium text-gray-700 mb-2">
                            Page Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="about_hero_title" 
                            name="about_hero_title" 
                            value="{{ old('about_hero_title', $settings['about_hero_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('about_hero_title') border-red-500 @enderror"
                            required
                        >
                        @error('about_hero_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="about_hero_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                            Subtitle <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="about_hero_subtitle" 
                            name="about_hero_subtitle" 
                            rows="2"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('about_hero_subtitle') border-red-500 @enderror"
                            required
                        >{{ old('about_hero_subtitle', $settings['about_hero_subtitle']->value ?? '') }}</textarea>
                        @error('about_hero_subtitle')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Our Story Section -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Our Story Section</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="about_story_title" class="block text-sm font-medium text-gray-700 mb-2">
                            Section Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="about_story_title" 
                            name="about_story_title" 
                            value="{{ old('about_story_title', $settings['about_story_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                    </div>

                    <div>
                        <label for="about_story_paragraph1" class="block text-sm font-medium text-gray-700 mb-2">
                            Paragraph 1 <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="about_story_paragraph1" 
                            name="about_story_paragraph1" 
                            rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >{{ old('about_story_paragraph1', $settings['about_story_paragraph1']->value ?? '') }}</textarea>
                    </div>

                    <div>
                        <label for="about_story_paragraph2" class="block text-sm font-medium text-gray-700 mb-2">
                            Paragraph 2 <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="about_story_paragraph2" 
                            name="about_story_paragraph2" 
                            rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >{{ old('about_story_paragraph2', $settings['about_story_paragraph2']->value ?? '') }}</textarea>
                    </div>

                    <div>
                        <label for="about_story_paragraph3" class="block text-sm font-medium text-gray-700 mb-2">
                            Paragraph 3 <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="about_story_paragraph3" 
                            name="about_story_paragraph3" 
                            rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >{{ old('about_story_paragraph3', $settings['about_story_paragraph3']->value ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Mission & Vision -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Mission & Vision</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="space-y-4">
                        <h4 class="font-medium text-gray-900">Mission</h4>
                        <div>
                            <label for="about_mission_title" class="block text-sm font-medium text-gray-700 mb-2">
                                Title <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="about_mission_title" 
                                name="about_mission_title" 
                                value="{{ old('about_mission_title', $settings['about_mission_title']->value ?? '') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >
                        </div>
                        <div>
                            <label for="about_mission_content" class="block text-sm font-medium text-gray-700 mb-2">
                                Content <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="about_mission_content" 
                                name="about_mission_content" 
                                rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >{{ old('about_mission_content', $settings['about_mission_content']->value ?? '') }}</textarea>
                        </div>
                    </div>

                    <div class="space-y-4">
                        <h4 class="font-medium text-gray-900">Vision</h4>
                        <div>
                            <label for="about_vision_title" class="block text-sm font-medium text-gray-700 mb-2">
                                Title <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="about_vision_title" 
                                name="about_vision_title" 
                                value="{{ old('about_vision_title', $settings['about_vision_title']->value ?? '') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >
                        </div>
                        <div>
                            <label for="about_vision_content" class="block text-sm font-medium text-gray-700 mb-2">
                                Content <span class="text-red-500">*</span>
                            </label>
                            <textarea 
                                id="about_vision_content" 
                                name="about_vision_content" 
                                rows="4"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >{{ old('about_vision_content', $settings['about_vision_content']->value ?? '') }}</textarea>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Core Values Section Header -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Core Values Section Header</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="about_values_title" class="block text-sm font-medium text-gray-700 mb-2">
                            Section Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="about_values_title" 
                            name="about_values_title" 
                            value="{{ old('about_values_title', $settings['about_values_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                    </div>
                    <div>
                        <label for="about_values_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                            Subtitle <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="about_values_subtitle" 
                            name="about_values_subtitle" 
                            value="{{ old('about_values_subtitle', $settings['about_values_subtitle']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                    </div>
                </div>
            </div>

            <!-- Core Values (6 values) -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Core Values</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    @for($i = 1; $i <= 6; $i++)
                        <div class="p-4 bg-gray-50 rounded-lg space-y-3">
                            <h4 class="font-medium text-gray-900">Value {{ $i }}</h4>
                            <div>
                                <label for="about_value{{ $i }}_title" class="block text-sm font-medium text-gray-700 mb-2">
                                    Title <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="about_value{{ $i }}_title" 
                                    name="about_value{{ $i }}_title" 
                                    value="{{ old('about_value'.$i.'_title', $settings['about_value'.$i.'_title']->value ?? '') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required
                                >
                            </div>
                            <div>
                                <label for="about_value{{ $i }}_content" class="block text-sm font-medium text-gray-700 mb-2">
                                    Description <span class="text-red-500">*</span>
                                </label>
                                <textarea 
                                    id="about_value{{ $i }}_content" 
                                    name="about_value{{ $i }}_content" 
                                    rows="2"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required
                                >{{ old('about_value'.$i.'_content', $settings['about_value'.$i.'_content']->value ?? '') }}</textarea>
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Why Choose Us Section</h3>
                
                <div class="space-y-4 mb-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                        <div>
                            <label for="about_why_title" class="block text-sm font-medium text-gray-700 mb-2">
                                Section Title <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="about_why_title" 
                                name="about_why_title" 
                                value="{{ old('about_why_title', $settings['about_why_title']->value ?? '') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >
                        </div>
                        <div>
                            <label for="about_why_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                                Subtitle <span class="text-red-500">*</span>
                            </label>
                            <input 
                                type="text" 
                                id="about_why_subtitle" 
                                name="about_why_subtitle" 
                                value="{{ old('about_why_subtitle', $settings['about_why_subtitle']->value ?? '') }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                required
                            >
                        </div>
                    </div>
                </div>

                <h4 class="font-medium text-gray-900 mb-3">Statistics</h4>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                    @for($i = 1; $i <= 4; $i++)
                        <div class="p-4 bg-blue-50 rounded-lg space-y-3">
                            <h5 class="font-medium text-gray-900">Stat {{ $i }}</h5>
                            <div>
                                <label for="about_stat{{ $i }}_value" class="block text-sm font-medium text-gray-700 mb-2">
                                    Value <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="about_stat{{ $i }}_value" 
                                    name="about_stat{{ $i }}_value" 
                                    value="{{ old('about_stat'.$i.'_value', $settings['about_stat'.$i.'_value']->value ?? '') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    placeholder="e.g., 50+"
                                    required
                                >
                            </div>
                            <div>
                                <label for="about_stat{{ $i }}_label" class="block text-sm font-medium text-gray-700 mb-2">
                                    Label <span class="text-red-500">*</span>
                                </label>
                                <input 
                                    type="text" 
                                    id="about_stat{{ $i }}_label" 
                                    name="about_stat{{ $i }}_label" 
                                    value="{{ old('about_stat'.$i.'_label', $settings['about_stat'.$i.'_label']->value ?? '') }}"
                                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                                    required
                                >
                            </div>
                        </div>
                    @endfor
                </div>
            </div>

            <!-- CTA Section -->
            <div class="pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Call-to-Action Section</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="about_cta_title" class="block text-sm font-medium text-gray-700 mb-2">
                            CTA Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="about_cta_title" 
                            name="about_cta_title" 
                            value="{{ old('about_cta_title', $settings['about_cta_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >
                    </div>

                    <div>
                        <label for="about_cta_subtitle" class="block text-sm font-medium text-gray-700 mb-2">
                            CTA Subtitle <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="about_cta_subtitle" 
                            name="about_cta_subtitle" 
                            rows="2"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent"
                            required
                        >{{ old('about_cta_subtitle', $settings['about_cta_subtitle']->value ?? '') }}</textarea>
                    </div>
                </div>
            </div>

            <!-- Submit Button -->
            <div class="flex items-center justify-between pt-6 border-t border-gray-200">
                <a href="{{ route('admin.dashboard') }}" class="px-6 py-2 text-gray-700 bg-gray-100 rounded-lg hover:bg-gray-200 transition">
                    Cancel
                </a>
                <button 
                    type="submit" 
                    class="px-6 py-2 bg-gradient-to-r from-blue-600 to-blue-500 text-white rounded-lg hover:shadow-lg hover:shadow-blue-500/50 transition"
                >
                    Save Changes
                </button>
            </div>
        </form>
    </div>
</div>
@endsection

