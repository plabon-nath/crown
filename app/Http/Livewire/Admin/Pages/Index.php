<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\FoodItems;
use App\Models\SKU;
use App\Models\User;
use Livewire\Component;

class Index extends Component
{
 public $users, $items, $order;

    public function render()
    {
        return view('livewire.admin.pages.index')
            ->layout('layouts.dash');
    }

    public function mount()
    {
        $this->users=User::count();
        $this->items=SKU::where('status', 1)->count();

    }
}
