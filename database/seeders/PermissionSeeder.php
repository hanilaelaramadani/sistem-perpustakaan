<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;
use App\Models\User;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_admin = Role::updateOrcreate(
            [
                'name' => 'admin'

            ],
            ['name' => 'admin']
        );
        $role_petugas = Role::updateOrCreate(
            [
                'name' => 'petugas'

            ],
            ['name' => 'petugas']
        );
        $role_user = Role::updateOrCreate(
            [
                'name' => 'user'

            ],
            ['name' => 'user']
        );

        $user = User::find(1);
        $user->assignRole('admin');

        $user = User::find(2);
        $user->assignRole('user');


    }
}
