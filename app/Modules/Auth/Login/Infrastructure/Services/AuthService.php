<?php

namespace App\Modules\Auth\Login\Infrastructure\Services;

use App\Modules\Auth\Login\Application\Commands\LoginCommand;
use Illuminate\Support\Facades\Auth;

class AuthService
{
    public function handle(LoginCommand $command)
    {
        if (Auth::attempt(['email' => $command->email, 'password' => $command->password])) {
            session()->regenerate();
            
            return true;
        }

        return false;
    }
}