<?php

namespace App\Http\Livewire\Guest\Components;

use App\Models\FoodItems;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Livewire\Component;


class ProductsCollections extends Component
{
    public $limit, $item, $form;
    public $category;
    public $attribute;
    protected $listeners= ['applyFilter' => 'Filter'];

    public function render()
    {
        return view('livewire.guest.components.products-collections')
            ->with('items', $this->items() );
    }
    public function items()
    {
        return  DB::table('food_items')
            ->join('food_categories', 'food_items.food_category_id', '=', 'food_categories.id')
            ->join('s_k_u_s', 'food_items.id', '=', 's_k_u_s.food_item_id')
            ->join('attributes', 's_k_u_s.attribute_id', '=', 'attributes.id')
            ->where('food_items.is_available', 1)
            ->where('attributes.status', 1)
            ->where('s_k_u_s.status', 1)
            ->where('food_categories.status', 1)
            ->when(!empty($this->category), function ($query) {
                return $query->whereIn('food_items.category_id', $this->category);
            })
            ->when(!empty($this->attribute), function ($query) {
                return $query->whereIn('s_k_u_s.attribute_id', $this->attribute);
            })
            ->select('food_items.*','s_k_u_s.id as skuId','s_k_u_s.price as price',
                'attributes.name as attribute',
                'food_categories.name as category')
            ->paginate(4);
    }

    public function Filter($category, $attribute)
    {
        $this->category = $category;
        $this->attribute = $attribute;
    }

    public function ChangeLimit($limit): void
    {
        $this->limit=$limit;
         $this->emit('refresh');
    }

    public function showItem($skuId)
    {
       $item= DB::table('s_k_u_s')
       ->where('s_k_u_s.id','=',$skuId)
       ->join('food_items', 's_k_u_s.food_item_id', '=', 'food_items.id')
       ->join('food_categories', 'food_items.food_category_id', '=', 'food_categories.id')
       
       ->join('attributes', 's_k_u_s.attribute_id', '=', 'attributes.id')
       ->select('food_items.*','s_k_u_s.*',
                'attributes.name as attribute',
                'food_categories.name as category')->first();
            
       
        Cart::add([
            'id' => $item->id, 
            'name' => $item->name, 
            'qty' => 1, 
            'price' => $item->price, 
            'weight' => 550, 
        ]);
        $this->emitTo('guest.components.navigation','refreshNav');
        $this->emit('$refresh');
    }
}  
