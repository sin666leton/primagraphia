<?php

namespace App\Modules\Auth\Login\Application\Usecases;

use App\Modules\Auth\Login\Application\Commands\LoginCommand;
use App\Modules\Auth\Login\Infrastructure\Services\AuthService;

class LoginUsecase
{
    public function __construct(
        private AuthService $auth
    ) {}

    public function handle(LoginCommand $command)
    {
        return $this->auth->handle($command);
    }
}