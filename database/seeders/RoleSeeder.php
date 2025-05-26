<?php

namespace Database\Seeders;

use App\Enums\RoleEnum;
use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    public function run()
    {
        foreach (RoleEnum::cases() as $roleEnum) {
            Role::updateOrCreate(
                ['slug' => $roleEnum->slug()],
                ['name' => $roleEnum->value]
            );
        }
    }
}
