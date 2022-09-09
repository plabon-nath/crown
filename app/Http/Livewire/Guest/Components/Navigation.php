<?php

namespace App\Http\Livewire\Guest\Components;

use Illuminate\Queue\Listener;
use Livewire\Component;

class Navigation extends Component
{
    protected $listener=[
        'refreshNav'=> '$refresh'
    ];
    public function render()
    {
        return view('livewire.guest.components.navigation');
    }
}
