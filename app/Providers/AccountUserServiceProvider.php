<?php

namespace App\Providers;

use App\Account;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Contracts\Auth\UserProvider;

class AccountUserServiceProvider implements UserProvider
{

    public function retrieveById($identifier)
    {
        return Account::find($identifier);
    }

    public function retrieveByToken($identifier, $token)
    {
        return null;
    }

    public function updateRememberToken(Authenticatable $user, $token)
    {
        return null;
    }

    public function retrieveByCredentials(array $credentials)
    {
        if (empty($credentials) ||
            (count($credentials) === 1 &&
                array_key_exists('password', $credentials))) {
            return;
        }

        if (config('variables.encryption', 'sha1') === 'sha1') {
            $credentials['password'] = sha1($credentials['password']);
        }

        return Account::where('name', '=', $credentials['name'])->where('password', '=', $credentials['password'])->first();
    }

    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return $user !== null;
    }

}
