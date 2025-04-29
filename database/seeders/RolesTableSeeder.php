<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RolesTableSeeder extends Seeder
{
    public function run(): void
    {
        $roles = [
            ['role_name' => 'Admin', 'url' => '/admin'],
            ['role_name' => 'User', 'url' => '/user'],
            ['role_name' => 'Guest', 'url' => '/guest'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->updateOrInsert(
                ['role_name' => $role['role_name']], // Unique identifier
                [
                    'url' => $role['url'],
                    'updated_at' => now(),
                    'created_at' => now(),
                ]
            );
        }
    }
}
