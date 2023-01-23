<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::where('username','wfermin')->first();
        $user->assignRole(['Admin']);

        $Admin = Role::create(['name' => 'Admin']);
        $HelpDesk = Role::create(['name' => 'HelpDesk']);
        $Developer = Role::create(['name' => 'Developer']);
        $Employee = Role::create(['name' => 'Employee']);
        $RRHH = Role::create(['name' => 'RRHH']);
        $Service = Role::create(['name' => 'Service']);
        
    }
}
