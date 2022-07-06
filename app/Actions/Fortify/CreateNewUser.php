<?php

namespace App\Actions\Fortify;

use App\Models\Instansi;
use App\Models\Role;
use App\Models\RoleUser;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'username' => ['required', 'string', 'max:255', Rule::unique(User::class)],
            'email' => [
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(User::class),
            ],
            'password' => $this->passwordRules(),
            'firstname' => ['required', 'string', 'max:255'],
            'lastname' => ['required', 'string', 'max:255']
        ])->validate();
        $domain = explode('@', $input['email'])[1];

        $memberRole = Role::where('name','member')->first();
        $user = User::create([
            'username' => $input['username'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'firstname' => $input['username'],
            'lastname' => $input['lastname']
        ]);
        

        if($domain == 'student.uns.ac.id'){
            $instansi = Instansi::where('code', 'uns')->first();
            if ($instansi == null) {
                return 'Instansi tidak ditemukan';
            }
            User::find($user->id)->update([
                'instansis_id' => $instansi->id,
            ]);
        }
        
        RoleUser::create([
            'users_id' => $user->id,
            'roles_id' => $memberRole->id,
        ]);

        return $user;
    }
}
