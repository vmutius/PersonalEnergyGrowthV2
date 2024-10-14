<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Glossar;

class GlossarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossar::truncate();
        $glossaries = json_decode(file_get_contents(database_path('seeders/glossar.json')), true);
        DB::table('glossars')->insert($glossaries);
    }
}
