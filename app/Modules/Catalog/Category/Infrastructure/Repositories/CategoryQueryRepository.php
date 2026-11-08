<?php

namespace App\Modules\Catalog\Category\Infrastructure\Repositories;

use App\Models\Category;
use App\Modules\Catalog\Category\Application\Contracts\CategoryQueryContract;

class CategoryQueryRepository implements CategoryQueryContract
{
    public function paginate()
    {
        return Category::orderBy('sort_order')->paginate();
    }
}