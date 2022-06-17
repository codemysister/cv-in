<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $admin = User::create([
            'name' => 'Deva',
            'email' => 'admin@admin.com',
            'password' => bcrypt('admin123')
        ]);

        $role = Role::create(['name' => 'Admin']);

        $permissions = Permission::pluck('id')->all();

        $role->syncPermissions($permissions);

        $admin->assignRole($role);

        $user = User::create([
            'name' => 'user',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123')
        ]);

        $role = Role::create(['name' => 'User']);

        $user->assignRole($role);
    }
}
