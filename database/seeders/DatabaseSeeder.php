<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $this->call([
            CategorySeeder::class,
            RoleSeeder::class,
        ]);

        User::factory()->create([
            'name' => 'User',
            'email' => 'user@example.com',
            'role_id' => 1,
        ]);

        User::factory()->create([
            'name' => 'Member',
            'email' => 'member@example.com',
            'role_id' => 2,
        ]);

        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'role_id' => 3,
        ]);
    }
}
