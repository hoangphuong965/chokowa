<?php

namespace Database\Factories;

use App\Models\MstPrefecture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Station>
 */
class StationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => 'Station '.fake()->unique()->randomNumber(),
            'introduction' => fake()->text(),
            'zipcode' => fake()->postcode(),
            'mst_prefecture_id' => MstPrefecture::select('id')->get()->random(),
            'municipality' => fake()->city(),
            'after_address' => fake()->streetAddress(),
            'map_link' => fake()->url(),
            'staff_average_age' => rand(20, 50),
            'director_name' => fake()->name(),
            'graduation_school' => fake()->city(),
            'other_information' => fake()->text(),
            'web_link' => fake()->url(),
            'other_links' => fake()->url(),
            'created_user' => 'seeder',
            'updated_user' => 'seeder',
        ];
    }
}
