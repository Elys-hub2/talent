<?php

namespace App\Actions\Fortify;

use App\Models\User;
use App\Models\Role;
use App\Actions\Fortify\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Laravel\Fortify\Contracts\CreatesNewUsers;
use Laravel\Jetstream\Jetstream;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @param \Illuminate\Http\Request  $request
     * @return  \Illuminate\Http\RedirectResponse
     * @return \App\Models\User
     * @return \App\Models\Role
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
        ]);
        return User::roleAttached([
            'role_id' => $input['role_id'],
        ]);

    }
    //public function store(Request $request)
    //{
      //  $user->attachRole($request->role_id);
    //}
}
