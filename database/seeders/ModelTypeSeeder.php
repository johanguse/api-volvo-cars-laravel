<?php

namespace Database\Seeders;

use App\Models\ModelType;
use Illuminate\Database\Seeder;

class ModelTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelType::insert([
            [
                "id" => 1,
                "car_id" => 1
            ],
            [
                "id" => 2,
                "car_id" => 2
            ],
            [
                "id" => 3,
                "car_id" => 3
            ],
            [
                "id" => 4,
                "car_id" => 4
            ],
            [
                "id" => 5,
                "car_id" => 5
            ]
        ]);
    }
}
