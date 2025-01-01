<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        $super_admin = User::factory()->create([
            'name' => 'Admin User',
            'email' => 'super-admin@gmail.com',
        ]);

        $super_admin->assignRole('super-admin');
    }
}
