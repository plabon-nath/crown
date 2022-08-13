<?php

namespace App\Http\Livewire\Admin\Pages;

use Livewire\Component;
use App\Models\Attribute as FoodAttribute;

class Attribute extends Component
{
    public $form= [
        'name' => '',
        'description' => '',
        'status' => true,
    ];
    public function render()
    {
        return view('livewire.admin.pages.attribute')
            ->layout('layouts.dash');
    }



    public function createAttribute()
    {
        $validated = $this->validate([
            'form.name' => 'required|string|max:20|unique:App\Models\Attribute,name',
            'form.description' => 'string|max:100|nullable',
            'form.status' => 'boolean',
        ]);

        $data['name'] = $validated['form']['name'];
        $data['description'] = $validated['form']['description'];
        $data['status'] = $validated['form']['status'];

        FoodAttribute::create($data);

        $this->reset();
        $this->emitTo('admin.components.attribute-table', 'refreshAttributeTable');
        return back()->with('success', 'Attribute created successfully');
    }
}
