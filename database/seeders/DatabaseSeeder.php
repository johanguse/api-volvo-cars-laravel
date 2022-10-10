<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CarSeeder::class);
        $this->call(CarBodyTypeSeeder::class);
        $this->call(CarModelSeeder::class);
        $this->call(BodyTypeSeeder::class);
        $this->call(ModelTypeSeeder::class);
    }
}
