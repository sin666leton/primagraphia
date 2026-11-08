<?php

namespace App\Modules\Catalog\Category\Application\DTOs;

class SimpleCategoryDTO
{
    public function __construct(
        public readonly int $id,
        public readonly string $name,
        public readonly string $slug,
        public readonly string $sortOrder
    ) {}   
}