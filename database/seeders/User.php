<?php

namespace Database\Seeders;

use App\Models\User as ModelsUser;
use Faker\Factory;
use Illuminate\Database\Seeder;

class User extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $password = bcrypt("secretpassword");
        ModelsUser::truncate();

        $faker = Factory::create();

        ModelsUser::create([
            "name" => 'John Doe',
            "password" => $password,
            "email" => "ebaidoo79@gmail.com"
        ]);

        foreach (range(1, 10) as $i) {
            ModelsUser::create([
                "name" => $faker->name,
                "password" => $password,
                "email" => $faker->email
            ]);
        }
    }
}
