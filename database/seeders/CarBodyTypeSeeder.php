<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CarBodyType;

class CarBodyTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CarBodyType::insert([
            [
                "slug" => "suv",
                "name" => "SUV"
            ],
            [
                "slug" => "sedan",
                "name" => "Sedan"
            ],
            [
                "slug" => "wagon",
                "name" => "Wagon"
            ],
            [
                "slug" => "coupe",
                "name" => "Coupe"
            ],
            [
                "slug" => "convertible",
                "name" => "Convertible"
            ]
        ]);
    }
}
