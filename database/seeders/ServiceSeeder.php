<?php

namespace Database\Seeders;

use App\Models\Service;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Service 1',
                'description' => 'Service 1 Description',
                'overview' => 'Service 1 Description Overview',
                'keywords' => 'Service 1 Keywords',
                'photo' => 'service-1.jpg',
                'icon' => 'sv1.png',
                'featured' => true,
            ], [
                'name' => 'Service 2',
                'description' => 'Service 2 Description',
                'overview' => 'Service 2 Description Overview',
                'keywords' => 'Service 2 Keywords',
                'photo' => 'service-1.jpg',
                'icon' => 'sv1.png',
                'featured' => true,
            ], [
                'name' => 'Service 3',
                'description' => 'Service 3 Description',
                'overview' => 'Service 3 Description Overview',
                'keywords' => 'Service 3 Keywords',
                'photo' => 'service-1.jpg',
                'icon' => 'sv1.png',
                'featured' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create([
                'identifier' => generate_identifier(),
                'name' => $service['name'],
                'slug' => Str::slug($service['name']),
                'description' => $service['description'],
                'overview' => $service['overview'],
                'keywords' => $service['keywords'],
                'photo' => $service['photo'],
                'icon' => $service['icon'],
                'featured' => $service['featured'],
                'published_at' => Carbon::now(),
            ]);
        }
    }
}
