<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = \Faker\Factory::create('id_ID');
        $items = [
            'Superadmin' => [
                'users'       => [
                    [
                        'name'              => 'Superadmin',
                        'email'             => 'superadmin@app.com',
                        'email_verified_at' => now(),
                        'password'          => Hash::make('password'),
                        'remember_token'    => Str::random(10),
                    ],
                ],
                'permissions' => [
                    'admin:read',
                    'admin:write',
                    'product:read',
                    'product:write',
                    'user:read',
                    'user:write',
                ],
            ],
            'Admin'      => [
                'permissions' => [
                    'product:read',
                    'product:write',
                    'user:read',
                    'user:write',
                ],
            ],
        ];

        foreach ($items as $role => $item) {
            $role = Role::create(['name' => $role]);

            if (isset($item['users'])) {
                foreach ($item['users'] as $_user) {
                    $user = User::create($_user);
                    $user->assignRole($role);
                }
            }

            if ($role->name == 'Admin') {
                foreach (range(1, 1) as $_admin) {
                    $gender     = $faker->randomElement(['male', 'female']);
                    $first_name = $faker->firstName($gender);
                    $last_name  = $faker->lastName($gender);
                    $name       = $first_name . ' ' . $last_name;
                    $user       = User::create([
                        'name'              => $name,
                        'email'             => Str::slug($name, '.') . '@' . $faker->safeEmailDomain,
                        'email_verified_at' => now(),
                        'password'          => Hash::make('password'),
                        'remember_token'    => Str::random(10),
                    ]);
                    $user->assignRole($role);
                }
            }

            if (isset($item['permissions'])) {
                foreach ($item['permissions'] as $_permission) {
                    $permission = Permission::firstOrCreate(['name' => $_permission]);
                    $permission->assignRole($role);
                }
            }
        }
        app()->make(\Spatie\Permission\PermissionRegistrar::class)->forgetCachedPermissions();
    }
}
