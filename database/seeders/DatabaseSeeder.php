<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $this->call([
            RoleSeeder::class,
            UserAdminSeeder::class,
        ]);

        // User::factory(10)->create();

        $user = User::create([
            'username' => 'Test User',
            'email' => 'test@example.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123'),
            'active' => true,
            'remember_token' => Str::random(10),
            'created_at' => date_create('now')
        ]);

        // Recupera o papel "Player"
        $playerRole = Role::where('name', 'Player')->first();

        // Associa o usuário ao papel "Player"
        $user->roles()->attach($playerRole);

    }
}
