<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MstPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('mst_permissions')->insert([
            [
                'id' => 1,
                'name' => 'all-permissions',
                'display_name' => 'All permissions',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 2,
                'name' => 'create-all-stations',
                'display_name' => 'Create all stations',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 3,
                'name' => 'update-all-stations',
                'display_name' => 'Update all stations',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 4,
                'name' => 'delete-all-stations',
                'display_name' => 'Delete all stations',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 5,
                'name' => 'create-all-users',
                'display_name' => 'Create all users',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 6,
                'name' => 'update-all-users',
                'display_name' => 'Update all users',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 7,
                'name' => 'delete-all-users',
                'display_name' => 'Delete all users',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 8,
                'name' => 'create-all-jobs',
                'display_name' => 'Create all jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 9,
                'name' => 'update-all-jobs',
                'display_name' => 'Update all jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 10,
                'name' => 'delete-all-jobs',
                'display_name' => 'Delete all jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 11,
                'name' => 'update-own-station',
                'display_name' => 'Update own station',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 12,
                'name' => 'update-station-users',
                'display_name' => "Update station's users",
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 13,
                'name' => 'create-station-jobs',
                'display_name' => 'Create station jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 14,
                'name' => 'update-station-jobs',
                'display_name' => 'Update station jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 15,
                'name' => 'delete-station-jobs',
                'display_name' => 'Delete station jobs',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ],
            [
                'id' => 16,
                'name' => 'update-own-user',
                'display_name' => 'Update own user',
                'created_user' => 'seeder',
                'updated_user' => 'seeder',
            ]
        ]);
    }
}
