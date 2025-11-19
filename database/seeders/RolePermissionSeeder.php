<?php

namespace Database\Seeders;

use App\Enums\PermissionEnum;
use App\Enums\RolePermissionEnum;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolePermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // 1️⃣ إنشاء جميع الصلاحيات
        foreach(PermissionEnum::cases() as $permission){
            Permission::firstOrCreate(['name'=>$permission]);
        }

         // 2️⃣ إنشاء جميع الأدوار وربطهم بالصلاحيات
        foreach(RolePermissionEnum::cases() as $rolePermission)
        {
            $role =Role::firstOrCreate(['name'=>$rolePermission->value]);
            $permissions = $rolePermission->permissions();
            $role->syncPermissions($permissions);

        }
    }
}
