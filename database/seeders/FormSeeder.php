<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Form;

class FormSeeder extends Seeder
{
    public function run()
    {
        $template = [
            'sections' => [
                [
                    'title' => 'Section 1 – Company Information',
                    'fields' => [
                        ['label' => 'Company Name', 'type' => 'text', 'name' => 'company_name'],
                        ['label' => 'Contact Person', 'type' => 'text', 'name' => 'contact_person'],
                        ['label' => 'Email / Phone', 'type' => 'text', 'name' => 'email_phone'],
                    ],
                ],
                [
                    'title' => 'Section 2 – Service Requirements',
                    'fields' => [
                        ['label' => 'Pickup & Delivery Location', 'type' => 'select', 'name' => 'pickup_location', 'options' => ['Single location', 'Multiple locations', 'Other']],
                        ['label' => 'Frequency of Pickup & Delivery', 'type' => 'select', 'name' => 'pickup_frequency', 'options' => ['Once daily', 'Twice daily', '2–3 times per week', 'Weekly', 'As needed / On call', 'Other']],
                        ['label' => 'Volume per Pickup', 'type' => 'select', 'name' => 'volume_per_pickup', 'options' => ['Small (up to 50)', 'Medium (51–200)', 'Large (201–500)', 'Extra Large (500+)']],
                        ['label' => 'Monthly Expected Business Value (AED)', 'type' => 'select', 'name' => 'monthly_value', 'options' => ['Less than 5,000 AED', '5,000 – 15,000 AED', '15,001 – 30,000 AED', 'Above 30,000 AED', 'Not sure yet']],
                        ['label' => 'Special Handling Required', 'type' => 'checkboxes', 'name' => 'special_handling', 'options' => ['Medical items', 'Hotel linen', 'Uniforms', 'Towels', 'Personal clothing', 'Others']],
                        ['label' => 'Emirate of Operation', 'type' => 'select', 'name' => 'emirate', 'options' => ['Abu Dhabi', 'Dubai', 'Sharjah', 'Ajman']],
                    ]
                ]
            ]
        ];

        Form::create([
            'title' => 'Suncity Laundry Requirement Form',
            'slug' => 'questioner-form', // ← fixed slug
            'template_json' => json_encode($template),
            'template_pdf_path' => 'requirement_forms/Requirement Form.pdf',
        ]);
    }
}
