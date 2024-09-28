<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = json_decode(file_get_contents(database_path('seeders/roles.json')), true);
        DB::table('roles')->insert($roles);
    }
}
