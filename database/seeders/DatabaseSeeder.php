<?php

namespace Database\Seeders;

use App\Models\CategoriesProduct;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
//             UserSeeder::class,
//             CategorySeeder::class,
//             CategoryRelationSeeder::class,
//             ProductSeeder::class,
             CategoriesProductSeeder::class
         ]);
    }
}
