<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(['name' => 'HP']);
        Brand::create(['name' => 'Asus']);
        Brand::create(['name' => 'Lenovo']);
        Brand::create(['name' => 'MSI']);
        Brand::create(['name' => 'Canon']);
        Brand::create(['name' => 'Epson']);
        Brand::create(['name' => 'Dell']);
    }
}
