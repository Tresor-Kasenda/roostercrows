<?php

namespace App\Livewire\Layout;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\View\View;
use Livewire\Component;

class SwitchLanguage extends Component
{
    public string $selectedLanguage;

    public function mount(): void
    {
        $this->selectedLanguage = app()->getLocale();
    }

    public function switchLanguage(string $lang): void
    {
        app()->setLocale($lang);
        $this->selectedLanguage = $lang;
    }

    public function render(): Factory|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\View|View|Application
    {
        return view('livewire.layout.switch-language');
    }
}
