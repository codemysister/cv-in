<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission = [
            "cv.view",
            "cv.edit",
            "cv.create",
            "cv.delete",
            "user.view",
            "user.create",
            "user.delete",
            "user.edit",
            "role.view",
            "role.create",
            "role.delete",
            "role.edit",
            "permission.view",
            "permission.create",
            "permission.delete",
            "permission.edit",
        ];

        for ($i = 0; $i < count($permission); $i++) {
            Permission::create(['name' => $permission[$i]]);
        }
    }
}
