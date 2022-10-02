<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarModel;

class CarModelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarModel::insert([
            [
                "slug" => "plug-in",
                "name" => "Plug-In"
            ],
            [
                "slug" => "hybrid",
                "name" => "Hybrid"
            ],
            [
                "slug" => "electric",
                "name" => "Electric"
            ],
            [
                "slug" => "gas",
                "name" => "Gasoline"
            ],
            [
                "slug" => "diesel",
                "name" => "Diesel"
            ]
        ]);
    }
}
