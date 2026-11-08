<?php

namespace App\Modules\Catalog\Category\Application\Contracts;

interface CategoryQueryContract
{
    public function paginate();
}