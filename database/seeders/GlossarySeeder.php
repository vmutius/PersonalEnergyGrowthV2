<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Glossary;

class GlossarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Glossary::truncate();
        $glossaries = json_decode(file_get_contents(database_path('seeders/glossary.json')), true);
        DB::table('glossaries')->insert($glossaries);
    }
}
