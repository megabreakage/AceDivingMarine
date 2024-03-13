<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class AboutSeeder extends Seeder
{
    public function run(): void
    {
        About::create([
            'identifier' => generate_identifier(),
            'name' => 'Ace Diving Marine',
            'description' => 'A leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service, comprehensive safety and quality programs, and competitive rates since 2012',
            'tagline' => 'A leading provider of marine construction and infrastructure support services',
            'mission' => 'A leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service, comprehensive safety and quality programs, and competitive rates since 2012',
            'vision' => 'A leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service, comprehensive safety and quality programs, and competitive rates since 2012',
            'core_values' => 'A leading provider of marine construction and infrastructure support services',
            'logo' => 'adm-logo-full.png',
            'image' => 'adm-logo-square.png',
            'keywords' => 'Ace Diving Marine, diving, marine, ace, sea, ocean, construction',
            'added_by' => 1,
        ]);
    }
}
