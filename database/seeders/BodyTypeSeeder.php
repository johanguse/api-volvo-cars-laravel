<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\BodyType;

class BodyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        BodyType::insert([
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
