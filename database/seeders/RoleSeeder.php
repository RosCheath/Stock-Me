<?php

namespace Database\Seeders;

use App\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleData = config('setting.roles');
        foreach ($roleData as $name) {
            $role = Role::where('name', '=', $name)->first();
            if (empty($role)) {
                $role = new Role();
                $role->name = $name;
                $role->save();
            }
        }
    }
}
