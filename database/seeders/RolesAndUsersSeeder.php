<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesAndUsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create roles
        $supportAgentRole = Role::create(['name' => 'support_agent']);
        $supportManagerRole = Role::create(['name' => 'support_manager']);

        // Create users and assign roles
        $supportAgent = User::create([
            'name' => 'Support Agent',
            'email' => 'support_agent@test.com',
            'password' => bcrypt('password'),
        ]);

        $supportManager = User::create([
            'name' => 'Support Manager',
            'email' => 'support_manager@test.com',
            'password' => bcrypt('password'),
        ]);

        $supportAgent->assignRole($supportAgentRole);
        $supportManager->assignRole($supportManagerRole);

    }
}
