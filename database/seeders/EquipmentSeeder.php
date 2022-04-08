<?php

namespace Database\Seeders;

use App\Models\Equipment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EquipmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Equipment::create(['name' => 'PC']);
        Equipment::create(['name' => 'Impresora']);
        Equipment::create(['name' => 'Toner']);
        Equipment::create(['name' => 'Laptop']);
    }
}
