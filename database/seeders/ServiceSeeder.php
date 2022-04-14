<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Service::create(['name' => 'Mantenimiento']);
        Service::create(['name' => 'Diagnostico']);
        Service::create(['name' => 'Formateo']);
        Service::create(['name' => 'Recarga de tinta']);
        Service::create(['name' => 'Instalación de programa']);
    }
}
