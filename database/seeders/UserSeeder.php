<?php

namespace Database\Seeders;

use App\Models\Instansi;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roleMember = Role::where('name', 'member')->first()->id;
        $roleAdmin = Role::where('name', 'admin')->first()->id;
        $instansi = Instansi::where('code', 'uns')->first()->id;

        $admin1 = User::updateOrCreate([
            'id' => 1,
        ],[
            'username' => 'admin1',
            'email' => 'admin1@student.uns.ac.id',
            'firstname' => 'admin',
            'lastname' => '1',
            'is_active' => true,
            'password' => Hash::make('password'),
            'instansis_id' => $instansi,
        ]);
        $admin2 = User::updateOrCreate([
            'id' => 2,
        ],[
            'username' => 'admin2',
            'email' => 'admin2@gmail.com',
            'firstname' => 'admin',
            'lastname' => '2',
            'is_active' => true,
            'password' => Hash::make('password'),
            'instansis_id' => null,
        ]);

        $member1 = User::updateOrCreate([
            'id' => 3,
        ],[
            'username' => 'member1',
            'email' => 'member1@student.uns.ac.id',
            'firstname' => 'member',
            'lastname' => '1',
            'password' => Hash::make('password'),
            'instansis_id' => $instansi,
        ]);

        $member2 = User::updateOrCreate([
            'id' => 4,
        ],[
            'username' => 'member2',
            'email' => 'member2@gmail.com',
            'firstname' => 'member',
            'lastname' => '2',
            'password' => Hash::make('password'),
            'instansis_id' => null,
        ]);

        RoleUser::UpdateOrCreate(['id'=>1],['users_id' => $admin1->id, 'roles_id'=> $roleAdmin]);
        RoleUser::UpdateOrCreate(['id'=>2],['users_id' => $admin2->id, 'roles_id'=> $roleAdmin]);
        RoleUser::UpdateOrCreate(['id'=>3],['users_id' => $member1->id, 'roles_id'=> $roleMember]);
        RoleUser::UpdateOrCreate(['id'=>4],['users_id' => $member2->id, 'roles_id'=> $roleMember]);
    }
}
