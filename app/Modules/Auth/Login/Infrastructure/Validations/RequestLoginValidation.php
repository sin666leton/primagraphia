<?php

namespace App\Modules\Auth\Login\Infrastructure\Validations;

class RequestLoginValidation
{
    public static function validate()
    {
        return [
            'email' => 'required|email',
            'password' => 'required'
        ];
    }

    public function attribute()
    {
        return [
            'email' => 'Email',
            'password' => 'Password'
        ];
    }
}