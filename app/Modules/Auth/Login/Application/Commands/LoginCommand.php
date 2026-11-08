<?php

namespace App\Modules\Auth\Login\Application\Commands;

class LoginCommand
{
    public function __construct(
        public readonly string $email,
        public readonly string $password
    ) {}
}