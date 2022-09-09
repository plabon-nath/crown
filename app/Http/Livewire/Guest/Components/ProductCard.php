<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\FoodItems;
use Livewire\Component;

class ProductCard extends Component
{
    public $item;
    protected $listeners= [
        'showItem'=> 'showItem',
    ];

    public function showItem($id)
    {
       if($this->item != null){
        $this->item=FoodItems::with('category','sku')->where('id', $id);
    
       return view('livewire.guest.components.product-card');
       }
    }
}
