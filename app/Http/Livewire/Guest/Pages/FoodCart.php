<?php

namespace App\Http\Livewire\Guest\Pages;

use Livewire\Component;

class FoodCart extends Component
{
    public $header;
    public function mount()
    {
        $this->header =
            [
                'title' => 'Cart',
                'breadcrumbs' => ['home', 'cart'],
            ];

    }
    public function render()
    {
        return view('livewire.guest.pages.food-cart')
        ->layout('layouts.guest');
    }
}
