<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin User',
                'email' => 'admin@example.com',
                'password' => Hash::make('password'),
                'role_id' => 1,
            ],
            [
                'name' => 'Normal User',
                'email' => 'user@example.com',
                'password' => Hash::make('password'),
                'role_id' => 2,
            ],
        ];

        foreach ($users as $user) {
            DB::table('users')->updateOrInsert(
                ['email' => $user['email']], // unique key to match
                array_merge(
                    $user,
                    ['updated_at' => now(), 'created_at' => now()]
                )
            );
        }
    }
}
