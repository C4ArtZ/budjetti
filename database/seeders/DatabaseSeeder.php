<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
         \App\Models\User::factory(10)->create();

        \App\Models\Budget::factory(10)->create();

        \App\Models\Project::factory(17)->create();

        \App\Models\Contractor::factory(10)->create();

         \App\Models\User::factory()->create([
             'name' => 'Christopher Monje',
             'email' => 'test@c4artz.de',
             'password' => '12345678'
         ]);
    }
}
