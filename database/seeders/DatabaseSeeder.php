<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Agama;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //Protestan, Katolik, Hindu, Buddha, dan Konghucu

        Agama::create([
                "agama" => "Islam"
            ]);
        Agama::create([
                "agama" => "Protestan"
            ]);
        Agama::create([
                "agama" => "Katolik"
            ]);
        Agama::create([
                "agama" => "Hindu"
            ]);
        Agama::create([
                "agama" => "Buddha"
            ]);
        Agama::create([
                "agama" => "Konghucu"
            ]);
    }
}
