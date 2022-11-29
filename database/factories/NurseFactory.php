<?php

namespace Database\Factories;

use App\Models\MstPrefecture;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Nurse>
 */
class NurseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'nickname' => fake()->name(),
            'fullname' => fake()->name(),
            'fullname_kana' => fake()->name(),
            'date_of_birth' => fake()->date('Y-m-d', '2004-01-01'),
            'phone' => fake()->phoneNumber(),
            'zipcode' => fake()->postcode(),
            'mst_prefecture_id' => MstPrefecture::select('id')->get()->random(),
            'municipality' => fake()->city(),
            'after_address' => fake()->streetAddress(),
            'nearest_station' => fake()->text(6),
            'introduction' => fake()->text(),
            'occupation' => fake()->jobTitle(),
            'job_method' => fake()->text(8),
            'desired_hourly_wage' => rand(1, 4) * 1000,
            'desired_holiday_hourly_wage' => rand(5, 9) * 1000,
            'home_visit_hourly_wage' => rand(1, 9) * 1000,
            'graduation_school' => fake()->city(),            
            'graduation_date' => fake()->date(),
            'other_information' => fake()->text(),
            'financial_organization' => fake()->text(10),
            'branch_name' => fake()->text(10),
            'deposit_type' => fake()->creditCardType(),
            'account_number' => fake()->creditCardNumber(),
            'account_name_kana' => fake()->name(),
            'created_user' => 'seeder',
            'updated_user' => 'seeder',
        ];
    }
}
