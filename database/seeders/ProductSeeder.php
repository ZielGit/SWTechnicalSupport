<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create(['name' => 'PC']);
        Product::create(['name' => 'Impresora']);
        Product::create(['name' => 'Toner']);
        Product::create(['name' => 'Laptop']);
    }
}
