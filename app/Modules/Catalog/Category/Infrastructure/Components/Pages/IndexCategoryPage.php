<?php

namespace App\Modules\Catalog\Category\Infrastructure\Components\Pages;

use App\Modules\Catalog\Category\Application\Usecases\PaginateCategoryUsecase;
use Livewire\Component;

class IndexCategoryPage extends Component
{
    public function render(PaginateCategoryUsecase $usecase)
    {
        $result = $usecase->handle();

        return view('admin.category.index', [
            'categories' => $result->data,
            'metadata' => [
                
            ]
        ])
        ->layout('layouts.app', [
            'title' => "Kategori"
        ]);
    }
}