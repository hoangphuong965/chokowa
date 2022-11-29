<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Image;
use App\Models\MstRole;
use App\Models\Nurse;
use App\Models\Station;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Sequence;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        User::factory()
            ->state([
                'mst_role_id' => MstRole::ADMIN_ID,
                'email' => 'admin@example.com',
            ])
            ->create();

        User::factory(2)
            ->state(new Sequence(
                [
                    'mst_role_id' => MstRole::STATION_ID,
                    'email' => 'station1@example.com',
                ],
                [
                    'mst_role_id' => MstRole::STATION_ID,
                    'email' => 'station2@example.com',
                ],
            ))
            ->has(Station::factory())
            ->has(
                Image::factory()
                    ->count(1)
                    ->state(new Sequence(
                        ['image_type' => 'station', 'path' => asset('storage/images/station_sample.png')],
                    ))
            )
            ->create();

        User::factory(3)
            ->state(new Sequence(
                [
                    'mst_role_id' => MstRole::NURSE_ID,
                    'email' => 'nurse1@example.com',
                ],
                [
                    'mst_role_id' => MstRole::NURSE_ID,
                    'email' => 'nurse2@example.com',
                ],
                [
                    'mst_role_id' => MstRole::NURSE_ID,
                    'email' => 'nurse3@example.com',
                ],
            ))
            ->has(Nurse::factory())
            ->has(
                Image::factory()
                    ->count(3)
                    ->state(new Sequence(
                        ['image_type' => 'nurse_license', 'path' => asset('storage/images/license_sample.png')],
                        ['image_type' => 'nurse_avatar', 'path' => asset('storage/images/avatar_sample.png')],
                        ['image_type' => 'nurse_identify', 'path' => asset('storage/images/identify_sample.png')],
                    ))
            )
            ->create();
    }
}
