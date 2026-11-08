<?php

namespace App\Modules\Shared\Application\DTOs;

class PaginateDTO
{
    public function __construct(
        public readonly array $data,
        public readonly int $page,
        public readonly int $perPage,
        public readonly int $currentPage
    ) {}
}