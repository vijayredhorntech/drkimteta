<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'VOPD',
                'description' => 'Description 1',
            ],
            [
                'name' => 'Clinic Visit',
                'description' => 'Description 2',
            ],
            [
                'name' => 'Consultation',
                'description' => 'Description 3',
            ],
            [
                'name' => 'Not Sure',
                'description' => 'Description 4',
            ],
        ];
        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
