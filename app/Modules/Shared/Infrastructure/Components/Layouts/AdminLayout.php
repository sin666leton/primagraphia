<?php

namespace App\Modules\Shared\Infrastructure\Components\Layouts;

use App\Models\Setting;
use Illuminate\View\Component;

class AdminLayout extends Component
{
    public function __construct(
        public string $title = '',
        public string $subtitle = ''
    ) {}

    public function render()
    {
        $settings = Setting::pluck('value', 'key');

        return view('layouts.admin', [
            'settings' => $settings
        ]);
    }
}