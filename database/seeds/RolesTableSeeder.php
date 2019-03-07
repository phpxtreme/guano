<?php

use App\Models\Role;
use Illuminate\Database\Seeder;

class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $roles */
        $roles = config('defaults.roles');

        array_map(function ($role) {
            Role::create($role);
        }, $roles);
    }
}
