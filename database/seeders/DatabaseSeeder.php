<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();

        $this->call(MstPermissionSeeder::class);
        $this->call(MstRoleSeeder::class);
        $this->call(MstExpectTaskSeeder::class);
        $this->call(MstPrefectureSeeder::class);
        $this->call(UserSeeder::class);

        Schema::disableForeignKeyConstraints();
    }

    /**
     * Truncate tables.
     * @param array $tables
     * @return void
     */
    public function truncateTables(array $tables)
    {
        foreach($tables as $table)
        {
            DB::table($table)->truncate();
        }
    }
}
