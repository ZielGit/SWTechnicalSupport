<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Frans',
            'email' => 'frans@gmail.com',
            'password' => bcrypt('SistemaSoporte')
        ])->assignRole('Administrador');

        User::factory(3)->create();
    }
}
