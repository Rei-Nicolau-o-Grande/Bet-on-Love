<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class UserAdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Cria o usuário administrador
        $user = User::create([
            'username' => env('ADMIN_USERNAME'),
            'email' => env('ADMIN_EMAIL'),
            'email_verified_at' => now(),
            'password' => bcrypt(env('ADMIN_PASSWORD')),
            'active' => true,
            'remember_token' => Str::random(10),
            'created_at' => date_create('now')
        ]);

        // Recupera o papel "Administrator"
        $adminRole = Role::where('name', 'Administrator')->first();

        // Associa o usuário ao papel "Administrator"
        $user->roles()->attach($adminRole);

        // User::factory(10)->create();
    }
}
