<?php

namespace Database\Seeders;

use App\Models\MstRole;
use Illuminate\Database\Seeder;

class MstRoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $created_user = 'seeder';
        $updated_user = 'seeder';

        MstRole::create([
                'id' => 1,
                'name' => 'admin',
                'display_name' => 'Conexi Admin',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ])
            ->permissions()
            ->attach(
                [
                    1 => compact('created_user', 'updated_user'),
                ]
            );
        
        MstRole::create([
                'id' => 2,
                'name' => 'station',
                'display_name' => 'Nurse Station',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ])
            ->permissions()
            ->attach(
                [
                    11 => compact('created_user', 'updated_user'),
                    12 => compact('created_user', 'updated_user'),
                    13 => compact('created_user', 'updated_user'),
                    14 => compact('created_user', 'updated_user'),
                    15 => compact('created_user', 'updated_user'),
                ]
            );

        MstRole::create([
                'id' => 3,
                'name' => 'nurse',
                'display_name' => 'Nurse',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ])
            ->permissions()
            ->attach(
                [
                    16 => compact('created_user', 'updated_user'),
                ]
            );
    }
}
