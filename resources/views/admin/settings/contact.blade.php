@extends('admin.layout')

@section('title', 'Contact Settings')
@section('page-title', 'Contact Settings')

@section('content')
<div class="max-w-4xl">
    <div class="bg-white rounded-lg shadow-md p-6">
        <div class="mb-6">
            <h2 class="text-xl font-semibold text-gray-900 mb-2">Edit Contact Information</h2>
            <p class="text-gray-600">Manage the contact information displayed on your contact page.</p>
        </div>

        <form method="POST" action="{{ route('admin.settings.contact.update') }}" class="space-y-6">
            @csrf
            @method('PUT')

            <!-- Section: Header -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Section Header</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="contact_title" class="block text-sm font-medium text-gray-700 mb-2">
                            Section Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_title" 
                            name="contact_title" 
                            value="{{ old('contact_title', $settings['contact_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_title') border-red-500 @enderror"
                            required
                        >
                        @error('contact_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_description" class="block text-sm font-medium text-gray-700 mb-2">
                            Section Description <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="contact_description" 
                            name="contact_description" 
                            rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_description') border-red-500 @enderror"
                            required
                        >{{ old('contact_description', $settings['contact_description']->value ?? '') }}</textarea>
                        @error('contact_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: Email Information -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Email Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_email_primary" class="block text-sm font-medium text-gray-700 mb-2">
                            Primary Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="contact_email_primary" 
                            name="contact_email_primary" 
                            value="{{ old('contact_email_primary', $settings['contact_email_primary']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_email_primary') border-red-500 @enderror"
                            required
                        >
                        @error('contact_email_primary')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_email_secondary" class="block text-sm font-medium text-gray-700 mb-2">
                            Secondary Email
                        </label>
                        <input 
                            type="email" 
                            id="contact_email_secondary" 
                            name="contact_email_secondary" 
                            value="{{ old('contact_email_secondary', $settings['contact_email_secondary']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_email_secondary') border-red-500 @enderror"
                        >
                        @error('contact_email_secondary')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: Phone Information -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Phone Information</h3>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                    <div>
                        <label for="contact_phone" class="block text-sm font-medium text-gray-700 mb-2">
                            Phone Number <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_phone" 
                            name="contact_phone" 
                            value="{{ old('contact_phone', $settings['contact_phone']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_phone') border-red-500 @enderror"
                            required
                        >
                        @error('contact_phone')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_phone_hours" class="block text-sm font-medium text-gray-700 mb-2">
                            Business Hours <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_phone_hours" 
                            name="contact_phone_hours" 
                            value="{{ old('contact_phone_hours', $settings['contact_phone_hours']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_phone_hours') border-red-500 @enderror"
                            placeholder="e.g., Mon-Fri, 9AM-6PM EST"
                            required
                        >
                        @error('contact_phone_hours')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: Office Address -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Office Address</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="contact_office_address_line1" class="block text-sm font-medium text-gray-700 mb-2">
                            Address Line 1 <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_office_address_line1" 
                            name="contact_office_address_line1" 
                            value="{{ old('contact_office_address_line1', $settings['contact_office_address_line1']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_office_address_line1') border-red-500 @enderror"
                            required
                        >
                        @error('contact_office_address_line1')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_office_address_line2" class="block text-sm font-medium text-gray-700 mb-2">
                            Address Line 2 (City, State, ZIP) <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_office_address_line2" 
                            name="contact_office_address_line2" 
                            value="{{ old('contact_office_address_line2', $settings['contact_office_address_line2']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_office_address_line2') border-red-500 @enderror"
                            required
                        >
                        @error('contact_office_address_line2')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: Social Media -->
            <div class="border-b border-gray-200 pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">Social Media Links</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="social_twitter_url" class="block text-sm font-medium text-gray-700 mb-2">
                            Twitter URL
                        </label>
                        <input 
                            type="url" 
                            id="social_twitter_url" 
                            name="social_twitter_url" 
                            value="{{ old('social_twitter_url', $settings['social_twitter_url']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('social_twitter_url') border-red-500 @enderror"
                            placeholder="https://twitter.com/yourcompany"
                        >
                        @error('social_twitter_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="social_linkedin_url" class="block text-sm font-medium text-gray-700 mb-2">
                            LinkedIn URL
                        </label>
                        <input 
                            type="url" 
                            id="social_linkedin_url" 
                            name="social_linkedin_url" 
                            value="{{ old('social_linkedin_url', $settings['social_linkedin_url']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('social_linkedin_url') border-red-500 @enderror"
                            placeholder="https://linkedin.com/company/yourcompany"
                        >
                        @error('social_linkedin_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="social_github_url" class="block text-sm font-medium text-gray-700 mb-2">
                            GitHub URL
                        </label>
                        <input 
                            type="url" 
                            id="social_github_url" 
                            name="social_github_url" 
                            value="{{ old('social_github_url', $settings['social_github_url']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('social_github_url') border-red-500 @enderror"
                            placeholder="https://github.com/yourcompany"
                        >
                        @error('social_github_url')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <!-- Section: FAQ -->
            <div class="pb-6">
                <h3 class="text-lg font-semibold text-gray-900 mb-4">FAQ Section</h3>
                
                <div class="space-y-4">
                    <div>
                        <label for="contact_faq_title" class="block text-sm font-medium text-gray-700 mb-2">
                            FAQ Title <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="contact_faq_title" 
                            name="contact_faq_title" 
                            value="{{ old('contact_faq_title', $settings['contact_faq_title']->value ?? '') }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_faq_title') border-red-500 @enderror"
                            required
                        >
                        @error('contact_faq_title')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
                    </div>

                    <div>
                        <label for="contact_faq_description" class="block text-sm font-medium text-gray-700 mb-2">
                            FAQ Description <span class="text-red-500">*</span>
                        </label>
                        <textarea 
                            id="contact_faq_description" 
                            name="contact_faq_description" 
                            rows="3"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent @error('contact_faq_description') border-red-500 @enderror"
                            required
                        >{{ old('contact_faq_description', $settings['contact_faq_description']->value ?? '') }}</textarea>
                        @error('contact_faq_description')
                            <p class="mt-1 text-sm text-red-600">{{ $message }}</p>
                        @enderror
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

