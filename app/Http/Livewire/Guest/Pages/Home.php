<?php

namespace App\Http\Livewire\Guest\Pages;

use Livewire\Component;

class Home extends Component
{
    public function render()
    {
        return view('livewire.guest.pages.home')
            ->layout('layouts.guest');
    }
}

