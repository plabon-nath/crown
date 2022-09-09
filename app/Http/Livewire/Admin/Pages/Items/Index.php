<?php

namespace App\Http\Livewire\Admin\Pages\Items;

use App\Models\FoodItems;
use DB;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Livewire\Component;

class Index extends Component
{

    public $limit=10;
    public $listeners = ['refresh' =>'$refresh'];

    /**
     * @param $limit
     */
    public function ChangeLimit($limit): void
    {
        $this->limit=$limit;
       $this->emit('refresh');
    }


    /**
     * @return Factory|View|Application
     */
    public function render(): Factory|View|Application
    {
        return view('livewire.admin.pages.items.index')
            ->layout('layouts.dash')
            ->with('items', FoodItems::with('category')->paginate($this->limit));
    }
     


}
