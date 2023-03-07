<?php

namespace Database\Seeders;

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
        // Role::create(['name' => 'Admin 1', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Role::create(['name' => 'Admin 2', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Role::create(['name' => 'Author 1' , 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        Role::create(['name' => 'Author 2', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // // PERMISSION ADMIN AUTH
        // Permission::create(['name' => 'create-admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-admin', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-author', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-city', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-city', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-city', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-city', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-country', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-article', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-article', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-article', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-article', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-category', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-contact', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-contact', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-contact', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-contact', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-slider', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-slider', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-slider', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-slider', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);

        // Permission::create(['name' => 'create-viewer', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-viewer', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-viewer', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-viewer', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);


        // Permission::create(['name' => 'create-permission', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'index-permission', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'edit-permission', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);
        // Permission::create(['name' => 'delete-permission', 'guard_name' => 'admin', 'created_at' => now(), 'updated_at' => now()]);


        // PERMISSION AUTHOR AUTH
        Permission::create(['name' => 'create-author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-author', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => 'create-city', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-city', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-city', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-city', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => 'create-country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-country', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => 'create-article', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-article', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-article', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-article', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => 'create-category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-category', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

        Permission::create(['name' => 'create-slider', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'index-slider', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'edit-slider', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);
        Permission::create(['name' => 'delete-slider', 'guard_name' => 'author', 'created_at' => now(), 'updated_at' => now()]);

    }
}
