<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        $userRole = Role::where('slug', RoleEnum::USER->slug())->first();
        $adminRole = Role::where('slug', RoleEnum::ADMIN->slug())->first();

        $user = User::updateOrCreate(
            ['email' => 'user@example.com'],
            [
                'name' => 'User Example',
                'password' => Hash::make('password'),
            ]
        );
        $user->roles()->syncWithoutDetaching([$userRole->id]);

        $admin = User::updateOrCreate(
            ['email' => 'admin@example.com'],
            [
                'name' => 'Admin Example',
                'password' => Hash::make('password'),
            ]
        );
        $admin->roles()->syncWithoutDetaching([$adminRole->id]);
    }
}
