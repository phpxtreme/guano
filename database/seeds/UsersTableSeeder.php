<?php

use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** @var array $users */
        $users = config('defaults.users');

        array_map(function ($user) {

            /** @var array $roles */
            $roles = $user['roles'];

            // Remove elements from the array
            unset($user['roles']);

            /** @var object $user */
            $user = User::create($user);

            // Associate Roles
            foreach ($roles as $role) {
                RoleUser::create([
                    'role_id' => $role,
                    'user_id' => $user->id
                ]);
            }
        }, $users);
    }
}
