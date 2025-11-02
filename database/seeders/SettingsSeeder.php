<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            // Contact Info - Title & Description
            [
                'key' => 'contact_title',
                'value' => 'Get in Touch',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'contact_description',
                'value' => 'Have a question or want to learn more about our services? We\'re here to help.',
                'type' => 'textarea',
                'group' => 'contact',
            ],

            // Email Info
            [
                'key' => 'contact_email_primary',
                'value' => 'contact@iwebcircle.com',
                'type' => 'email',
                'group' => 'contact',
            ],
            [
                'key' => 'contact_email_secondary',
                'value' => 'support@iwebcircle.com',
                'type' => 'email',
                'group' => 'contact',
            ],

            // Phone Info
            [
                'key' => 'contact_phone',
                'value' => '+1 (555) 123-4567',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'contact_phone_hours',
                'value' => 'Mon-Fri, 9AM-6PM EST',
                'type' => 'text',
                'group' => 'contact',
            ],

            // Office Address
            [
                'key' => 'contact_office_address_line1',
                'value' => '123 Innovation Drive',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'contact_office_address_line2',
                'value' => 'San Francisco, CA 94105',
                'type' => 'text',
                'group' => 'contact',
            ],

            // Social Media
            [
                'key' => 'social_twitter_url',
                'value' => 'https://twitter.com/iwebcircle',
                'type' => 'url',
                'group' => 'social',
            ],
            [
                'key' => 'social_linkedin_url',
                'value' => 'https://linkedin.com/company/iwebcircle',
                'type' => 'url',
                'group' => 'social',
            ],

            // FAQ Section
            [
                'key' => 'contact_faq_title',
                'value' => 'Have Questions?',
                'type' => 'text',
                'group' => 'contact',
            ],
            [
                'key' => 'contact_faq_description',
                'value' => 'Check out our frequently asked questions or schedule a call with our team.',
                'type' => 'textarea',
                'group' => 'contact',
            ],

            // About Page - Hero
            [
                'key' => 'about_hero_title',
                'value' => 'About iWebCircle',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_hero_subtitle',
                'value' => 'We\'re on a mission to make AI accessible and transformative for businesses of all sizes',
                'type' => 'textarea',
                'group' => 'about',
            ],

            // About Page - Story
            [
                'key' => 'about_story_title',
                'value' => 'Our Story',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_story_paragraph1',
                'value' => 'Founded in 2019, iWebCircle emerged from a simple observation: businesses were struggling to harness the power of artificial intelligence. We saw incredible potential being left untapped because AI seemed too complex, too expensive, or too risky.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_story_paragraph2',
                'value' => 'Our founders, a team of AI researchers and software engineers, decided to bridge this gap. We set out to build a company that could translate cutting-edge AI research into practical, scalable SaaS solutions that any business could adopt.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_story_paragraph3',
                'value' => 'Today, we\'ve helped over 50 companies transform their operations with AI. From startups to enterprises, our clients trust us to deliver intelligent solutions that drive real business value.',
                'type' => 'textarea',
                'group' => 'about',
            ],

            // About Page - Mission & Vision
            [
                'key' => 'about_mission_title',
                'value' => 'Our Mission',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_mission_content',
                'value' => 'To democratize AI technology by building intelligent, accessible SaaS solutions that empower businesses to innovate, automate, and scale with confidence.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_vision_title',
                'value' => 'Our Vision',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_vision_content',
                'value' => 'To become the world\'s most trusted partner for AI transformation, where every business—regardless of size—can leverage artificial intelligence to achieve extraordinary results.',
                'type' => 'textarea',
                'group' => 'about',
            ],

            // About Page - Core Values Section Header
            [
                'key' => 'about_values_title',
                'value' => 'Our Core Values',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_values_subtitle',
                'value' => 'The principles that guide everything we do',
                'type' => 'textarea',
                'group' => 'about',
            ],

            // About Page - Core Values (6 values)
            [
                'key' => 'about_value1_title',
                'value' => 'Innovation First',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value1_content',
                'value' => 'We constantly push boundaries, exploring new technologies and methodologies to deliver cutting-edge solutions.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_value2_title',
                'value' => 'Client Success',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value2_content',
                'value' => 'Your success is our success. We measure our achievements by the value we create for our clients.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_value3_title',
                'value' => 'Transparency',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value3_content',
                'value' => 'We believe in open communication, honest timelines, and clear expectations throughout every project.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_value4_title',
                'value' => 'Quality Excellence',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value4_content',
                'value' => 'We never compromise on quality. Every solution is thoroughly tested, optimized, and built to last.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_value5_title',
                'value' => 'Continuous Learning',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value5_content',
                'value' => 'AI evolves rapidly, and so do we. We invest heavily in learning, research, and skill development.',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_value6_title',
                'value' => 'Security & Privacy',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_value6_content',
                'value' => 'We prioritize data security and privacy, implementing best practices to protect your sensitive information.',
                'type' => 'textarea',
                'group' => 'about',
            ],

            // About Page - Why Choose Us
            [
                'key' => 'about_why_title',
                'value' => 'Why Choose iWebCircle?',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_why_subtitle',
                'value' => 'What sets us apart in the AI SaaS development landscape',
                'type' => 'textarea',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat1_value',
                'value' => '50+',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat1_label',
                'value' => 'Successful Projects',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat2_value',
                'value' => '98%',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat2_label',
                'value' => 'Client Retention Rate',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat3_value',
                'value' => '24/7',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat3_label',
                'value' => 'Technical Support',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat4_value',
                'value' => '5+',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_stat4_label',
                'value' => 'Years of Excellence',
                'type' => 'text',
                'group' => 'about',
            ],

            // About Page - CTA
            [
                'key' => 'about_cta_title',
                'value' => 'Ready to Work Together?',
                'type' => 'text',
                'group' => 'about',
            ],
            [
                'key' => 'about_cta_subtitle',
                'value' => 'Let\'s discuss how we can help transform your business with AI',
                'type' => 'textarea',
                'group' => 'about',
            ],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
