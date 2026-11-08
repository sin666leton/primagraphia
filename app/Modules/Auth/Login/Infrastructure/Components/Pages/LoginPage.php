<?php

namespace App\Modules\Auth\Login\Infrastructure\Components\Pages;

use App\Modules\Auth\Login\Application\Commands\LoginCommand;
use App\Modules\Auth\Login\Application\Usecases\LoginUsecase;
use App\Modules\Auth\Login\Infrastructure\Validations\RequestLoginValidation;
use App\Modules\Shared\Infrastructure\Services\GetSettingService;
use Livewire\Component;

class LoginPage extends Component
{
    public string $email = '';
    public string $password = '';

    public function login(LoginUsecase $usecase)
    {
        $validated = $this->validate(RequestLoginValidation::validate());

        if ($usecase->handle(new LoginCommand($validated['email'], $validated['password']))) {
            session()->flash('success', 'Selamat datang kembali di Dashboard Admin PPKD Sticker');
            
            return $this->redirectIntended(route('admin.dashboard.index'));
        }

        $this->addError(
            'auth',
            'Email atau Password salah'
        );
        
        $this->password = '';
    }

    public function render(GetSettingService $service)
    {
        $data = $service->handle();

        return view('login', [
            'settings' => $data,
        ])
        ->layout('layouts.app', [
            'title' => 'Login'
        ]);
    }
}