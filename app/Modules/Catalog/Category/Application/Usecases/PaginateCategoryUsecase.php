<?php

namespace App\Modules\Catalog\Category\Application\Usecases;

use App\Modules\Catalog\Category\Application\Contracts\CategoryQueryContract;
use App\Modules\Catalog\Category\Application\DTOs\SimpleCategoryDTO;
use App\Modules\Shared\Application\DTOs\PaginateDTO;

class PaginateCategoryUsecase
{
    public function __construct(
        private CategoryQueryContract $query
    ) {}

    public function handle(): PaginateDTO
    {
        $categories = $this->query->paginate();

        return new PaginateDTO(
            array_map(function ($category) {
                return new SimpleCategoryDTO(
                    $category->id,
                    $category->name,
                    $category->slug,
                    $category->sort_order
                );
            }, $categories->items()),
            1,
            1,
            1
        );
    }
}