<?php

namespace App\Http\Livewire\Admin\Pages\Sku;

use App\Models\Attribute;
use App\Models\FoodItems;
use App\Models\SKU;
use Livewire\Component;

class Create extends Component
{
    public $attributes, $foodItem_id;
    public $sku;
    public $form;

    public $listeners = [
        'skuCreated' => '$refresh',
    ];

    public function render()
    {
        return view('livewire.admin.pages.sku.create')
            ->layout('layouts.dash')
            ->with('item', FoodItems::with('category')->where('id', $this->foodItem_id)->get()->toArray()[0]);
    }

    public function mount(): void
    {
        $item=FoodItems::with('category')->where('id', $this->foodItem_id)->get()->toArray();
        dd($item);
        $this->attributes = Attribute::getActiveAttributes()->toArray();
        $this->sku = SKU::where('food_item_id',$this->foodItem_id)->with('attribute')->get()->toArray();
        $this->form['status'] = true;
    }


    protected array $rules = [
        'form.attr' => 'required|exists:App\Models\Attribute,id',
        'form.price' => 'required|numeric|regex:/^\d{1,13}(\.\d{1,2})?$/|min:0.01',
        'form.status' => 'required|boolean',
        'foodItem_id' => 'required|exists:App\Models\FoodItems,id',
    ];
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    protected array $validationAttributes = [
        'form.price' => 'Price',
        'form.attr' => 'Attribute',
        'form.status' => 'SKU Status',
        'foodItem_id' => 'Food Item',
    ];

    public function checkSKU($item, $attr)
    {
        $sku = SKU::where('food_item_id', $item)
            ->where('attribute_id', $attr)
            ->get()->toArray();
        return count($sku) > 0;
    }

    public function createSku()
    {
        $validated = $this->validate();
        $s = $this->checkSKU($validated['foodItem_id'], $validated['form']['attr']);
        if ($s) {
            return redirect(route('admin.sku.create', $this->foodItem_id))->with('error', 'SKU already exists');
        }

        $sku = new SKU();
        $sku->food_item_id = $validated['foodItem_id'];
        $sku->attribute_id = $validated['form']['attr'];
        $sku->price = $validated['form']['price'];
        $sku->status = $validated['form']['status'];
        $sku->save();
        $this->reset('form');
        $this->mount();
        return back()->with('success', 'SKU created successfully');

    }


}
