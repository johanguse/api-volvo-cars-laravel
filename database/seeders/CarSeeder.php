<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Car;

class CarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Car::insert([
            [
                "modelId" => "xc60-recharge",
                "modelName" => "XC60 Recharge",
                "bodyType" => "suv",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/xc60_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "xc90-recharge",
                "modelName" => "XC90 Recharge",
                "bodyType" => "suv",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/xc90_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "s60-recharge",
                "modelName" => "S60 Recharge",
                "bodyType" => "sedan",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/s60_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "s90-recharge",
                "modelName" => "S90 Recharge",
                "bodyType" => "sedan",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/s90_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "v60-recharge",
                "modelName" => "V60 Recharge",
                "bodyType" => "wagon",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/v60_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "v90-recharge",
                "modelName" => "V90 Recharge",
                "bodyType" => "wagon",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/v90_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ],
            [
                "modelId" => "xc40-recharge",
                "modelName" => "XC40 Recharge",
                "bodyType" => "suv",
                "modelType" => "plug-in hybrid",
                "imageUrl" => "/images/xc40_recharge.jpg",
                "year_released" => 2021,
                "created_at" => now(),
                "updated_at" => now()
            ]

        ]);
    }
}
