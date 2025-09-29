<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Inscricoes;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        Inscricoes::factory(10)->create();
        // User::factory()->create([
        //     'name' => 'new User',
        //     'email' => 'new@example.com',
        // ]);

    }
}
