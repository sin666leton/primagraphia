<?php

namespace App\Modules\Shared\Infrastructure\Services;

use App\Models\Setting;
use App\Modules\Shared\Application\DTOs\GlobalSettingDTO;

class GetSettingService
{
    public function handle():  GlobalSettingDTO
    {
        $settings = Setting::pluck('value', 'key');
        
        return new GlobalSettingDTO(
            $settings['site_tagline'] ?? "PPKD Sticker Tagline",
            $settings['name'] ?? "PPKD Sticker",
            $settings['logo'] ?? "??"
        );
    }
}