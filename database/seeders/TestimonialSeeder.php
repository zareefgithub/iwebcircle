<?php

namespace Database\Seeders;

use App\Models\Testimonial;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Sarah Johnson',
                'client_position' => 'CTO',
                'client_company' => 'ShopMart Inc.',
                'content' => 'iWebCircle transformed our customer support with their AI solution. Response times dropped by 75%, and our customers are happier than ever. The team was professional, knowledgeable, and delivered ahead of schedule.',
                'rating' => 5,
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'client_name' => 'Michael Chen',
                'client_position' => 'Director of Operations',
                'client_company' => 'HealthCare Alliance',
                'content' => 'The predictive analytics platform built by iWebCircle has been a game-changer for our hospital network. We\'ve significantly reduced readmission rates and improved patient outcomes. Highly recommended!',
                'rating' => 5,
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'client_name' => 'Emily Rodriguez',
                'client_position' => 'VP of Technology',
                'client_company' => 'FinServe Global',
                'content' => 'Working with iWebCircle was a fantastic experience. Their document processing solution saved us countless hours and dramatically improved accuracy. The ROI was evident within the first quarter.',
                'rating' => 5,
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'client_name' => 'David Thompson',
                'client_position' => 'CEO',
                'client_company' => 'RetailMax',
                'content' => 'The inventory optimization system has revolutionized how we manage stock. We\'ve cut carrying costs by 40% while actually improving product availability. iWebCircle truly understands AI and business.',
                'rating' => 5,
                'is_featured' => false,
                'order' => 4,
            ],
            [
                'client_name' => 'Jennifer Kim',
                'client_position' => 'Head of Risk Management',
                'client_company' => 'PaySecure Ltd.',
                'content' => 'The fraud detection system iWebCircle built for us is simply outstanding. It catches sophisticated fraud attempts that our old system missed, and false positives are down 80%. Excellent work!',
                'rating' => 5,
                'is_featured' => false,
                'order' => 5,
            ],
            [
                'client_name' => 'Robert Martinez',
                'client_position' => 'Chief Innovation Officer',
                'client_company' => 'Luxury Hotels Group',
                'content' => 'Our AI virtual assistant handles half our bookings now, and guests love it! iWebCircle delivered a solution that exceeded our expectations. Their expertise in conversational AI is impressive.',
                'rating' => 5,
                'is_featured' => false,
                'order' => 6,
            ],
        ];

        foreach ($testimonials as $testimonial) {
            Testimonial::create($testimonial);
        }
    }
}

