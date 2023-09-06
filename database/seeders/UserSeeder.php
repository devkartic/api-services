<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'Kartic',
            'status' => 1,
            'email' => 'dev.kartic@gmail.com',
        ]);

        \App\Models\User::factory(99)->create();
    }
}
