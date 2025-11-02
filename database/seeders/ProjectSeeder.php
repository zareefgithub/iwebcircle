<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'AI-Powered Customer Support Platform',
                'description' => 'Built an intelligent customer support system that reduced response times by 75% using natural language processing and machine learning.',
                'content' => "Challenge:\nOur client, a fast-growing e-commerce company, was struggling to keep up with customer inquiries. Their support team was overwhelmed, leading to delayed responses and customer dissatisfaction.\n\nSolution:\nWe developed an AI-powered customer support platform that combines NLP, sentiment analysis, and intelligent routing. The system can:\n- Understand customer intent and sentiment\n- Automatically categorize and prioritize tickets\n- Provide instant answers to common questions\n- Route complex issues to the right specialist\n- Learn from past interactions to improve responses\n\nResults:\n- 75% reduction in average response time\n- 60% of inquiries resolved automatically\n- 40% increase in customer satisfaction scores\n- Support team can focus on complex, high-value interactions\n\nTechnologies Used:\nPython, TensorFlow, spaCy, React, PostgreSQL, AWS",
                'client_name' => 'ShopMart Inc.',
                'technologies' => ['Python', 'TensorFlow', 'NLP', 'React', 'AWS'],
                'is_featured' => true,
                'order' => 1,
            ],
            [
                'title' => 'Predictive Analytics Dashboard for Healthcare',
                'description' => 'Developed a machine learning system that predicts patient readmission risks, enabling proactive care and reducing readmissions by 35%.',
                'content' => "Challenge:\nA major hospital network needed to reduce patient readmission rates while improving care quality. They had vast amounts of patient data but lacked the tools to extract actionable insights.\n\nSolution:\nWe created a comprehensive predictive analytics dashboard that:\n- Analyzes patient history, demographics, and treatment data\n- Predicts readmission risk for each patient\n- Identifies key risk factors and intervention opportunities\n- Provides personalized care recommendations\n- Tracks outcomes and continuously improves predictions\n\nResults:\n- 35% reduction in 30-day readmission rates\n- Improved patient outcomes and satisfaction\n- Significant cost savings from prevented readmissions\n- Early intervention for high-risk patients\n\nTechnologies Used:\nPython, scikit-learn, pandas, Vue.js, PostgreSQL, Azure",
                'client_name' => 'HealthCare Alliance',
                'technologies' => ['Python', 'Machine Learning', 'Vue.js', 'Azure', 'Healthcare'],
                'is_featured' => true,
                'order' => 2,
            ],
            [
                'title' => 'Intelligent Document Processing System',
                'description' => 'Automated document processing for a financial services company, extracting data from thousands of documents with 98% accuracy.',
                'content' => "Challenge:\nA financial services firm was processing thousands of documents manually – contracts, invoices, and forms. This was time-consuming, error-prone, and expensive.\n\nSolution:\nWe built an intelligent document processing system using computer vision and NLP:\n- Automatically classifies document types\n- Extracts structured data from unstructured documents\n- Validates extracted information against business rules\n- Integrates seamlessly with existing workflows\n- Learns from corrections to improve accuracy\n\nResults:\n- 90% reduction in manual processing time\n- 98% extraction accuracy\n- Significant cost savings from automation\n- Faster turnaround times for customers\n- Audit trail for compliance requirements\n\nTechnologies Used:\nPython, OpenCV, Tesseract OCR, BERT, FastAPI, MongoDB",
                'client_name' => 'FinServe Global',
                'technologies' => ['Python', 'Computer Vision', 'NLP', 'OCR', 'FastAPI'],
                'is_featured' => true,
                'order' => 3,
            ],
            [
                'title' => 'Smart Inventory Optimization System',
                'description' => 'Implemented an AI-driven inventory management system that optimized stock levels and reduced carrying costs by 40%.',
                'content' => "Challenge:\nA retail chain was struggling with inventory management – either running out of popular items or overstocking slow-moving products, resulting in lost sales and high carrying costs.\n\nSolution:\nWe developed a smart inventory optimization system that:\n- Predicts demand based on historical data and external factors\n- Optimizes reorder points and quantities\n- Identifies seasonal trends and anomalies\n- Provides real-time alerts for stock issues\n- Simulates different inventory strategies\n\nResults:\n- 40% reduction in carrying costs\n- 25% decrease in stockouts\n- Improved cash flow\n- Better product availability\n- Data-driven decision making\n\nTechnologies Used:\nPython, Prophet, scikit-learn, Angular, PostgreSQL, Google Cloud",
                'client_name' => 'RetailMax',
                'technologies' => ['Python', 'Forecasting', 'Angular', 'Google Cloud', 'Retail'],
                'is_featured' => false,
                'order' => 4,
            ],
            [
                'title' => 'AI-Powered Fraud Detection System',
                'description' => 'Created a real-time fraud detection system that identifies suspicious transactions with 99.5% accuracy, protecting millions in revenue.',
                'content' => "Challenge:\nAn online payment processor was losing millions to fraudulent transactions. Their rule-based system couldn't keep up with sophisticated fraud patterns.\n\nSolution:\nWe built an AI-powered fraud detection system that:\n- Analyzes transactions in real-time\n- Identifies complex fraud patterns\n- Adapts to new fraud techniques\n- Minimizes false positives\n- Provides explainable decisions for investigations\n\nResults:\n- 99.5% fraud detection accuracy\n- 80% reduction in false positives\n- Millions in prevented losses\n- Improved customer experience\n- Faster transaction processing\n\nTechnologies Used:\nPython, XGBoost, Apache Kafka, Redis, React, AWS",
                'client_name' => 'PaySecure Ltd.',
                'technologies' => ['Python', 'XGBoost', 'Real-time Processing', 'Kafka', 'AWS'],
                'is_featured' => false,
                'order' => 5,
            ],
            [
                'title' => 'Conversational AI Virtual Assistant',
                'description' => 'Developed a sophisticated voice-enabled virtual assistant for a hospitality chain, handling booking inquiries and guest services.',
                'content' => "Challenge:\nA hospitality chain wanted to provide 24/7 booking assistance and guest services without significantly increasing staff costs.\n\nSolution:\nWe created a conversational AI virtual assistant that:\n- Understands natural language queries\n- Handles complex booking scenarios\n- Provides personalized recommendations\n- Supports multiple languages\n- Integrates with booking and CRM systems\n\nResults:\n- 50% of bookings handled automatically\n- 24/7 availability\n- Increased booking conversion rates\n- Improved guest satisfaction\n- Multilingual support without additional staff\n\nTechnologies Used:\nPython, Dialogflow, Twilio, Node.js, MongoDB, Azure",
                'client_name' => 'Luxury Hotels Group',
                'technologies' => ['Python', 'NLP', 'Voice AI', 'Node.js', 'Azure'],
                'is_featured' => false,
                'order' => 6,
            ],
        ];

        foreach ($projects as $project) {
            if (!isset($project['slug'])) {
                $project['slug'] = Str::slug($project['title']);
            }

            Project::create($project);
        }
    }
}

