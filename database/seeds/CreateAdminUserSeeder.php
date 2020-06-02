<?php

use Illuminate\Database\Seeder;
use App\User;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class CreateAdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Admin
        $user = User::create([
            // 'username' => 'admin',
            'name' => 'Oda Aditiya Nicola',
            'email' => 'odanicola@gmail.com',
            'email_verified_at' => '2020-03-31 16:00:00',
            'password' => bcrypt('l4t1g1dheroku')
        ]);

        $role = Role::create(['name' => 'Admin']);
        $permissions = Permission::pluck('id', 'id')->all();
        $role->syncPermissions($permissions);
        $user->assignRole([$role->id]);
    }
}
