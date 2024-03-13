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
            'description' => 'ACE Diving & Marine Services is a leading provider of marine construction and infrastructure support services that has satisfied clients with 24-hour service,
                comprehensive safety and quality programs, and competitive rates since 2012. Our experience enables us to adapt quickly to unique problems and resolve potentially costly situations. 
                In addition, we have the proven ability to customize systems and management teams for individual projects. We are ready to take your project to the next level in safety, quality, and technology. 
                We are one of the few full-service underwater marine contractors that can provide project management, in-house engineering, marine and upland environmental services, and the full spectrum of ROV, 
                Survey & commercial diving services. Today, we stand ready at your service with—Commerical Diving, ROV & Survey teams, all supported by expert training and safety staff; 
                experienced personnel — crews trained in IRM, construction, salvage, environmental support, project management, and more; continuous-improvement safety and quality programs for maximum peace of mind.',
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
