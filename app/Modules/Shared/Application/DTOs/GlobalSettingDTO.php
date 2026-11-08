<?php

namespace App\Modules\Shared\Application\DTOs;

class GlobalSettingDTO
{
    public function __construct(
        public readonly string $tagline,
        public readonly string $name,
        public readonly string $logo
    )
    {}
}