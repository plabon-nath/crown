<?php

namespace App\Http\Livewire\Admin\Pages\Items;

use App\Models\Attribute;
use App\Models\FoodCategory;
use App\Models\FoodItems;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;
use Maatwebsite\Excel\Concerns\ToArray;

class Create extends Component
{
    use WithFileUploads;

    public $form = [
    'name'=>'',
    'description'=>'',
    'status'=> true,
    'category'=>'',
    ];
    public $image;
    public $prices = [' '];
    public $categories, $attributes, $attributes_selected;


    /**
     * Get validator rules.
     *
     * @return array
     */
    protected array $rules = [
        'form.name' => 'string|required|max:50|unique:App\Models\FoodItems,name',
        'form.description' => 'string|max:200|nullable',
        'form.status' => 'boolean',
        'image' => 'image|mimes:jpeg,png,jpg|max:2048|nullable',
        'form.category' => 'required|integer|exists:App\Models\FoodCategory,id',
    ];
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    protected array $validationAttributes = [
        'form.name' => 'Item Name',
        'form.description' => 'Item Description',
        'form.status' => 'Item status',
        'image' => 'Item image',
        'form.category' => 'Item category',
    ];

    public function render()
    {
        return view('livewire.admin.pages.items.create')
            ->layout('layouts.dash');
    }

    public function mount(): void
    {
        $this->categories = FoodCategory::getActiveCategory()->toArray();

    }


    /**
     * @return \Illuminate\Http\RedirectResponse
     */
    public function createItem()
    {
        $validated = $this->validate();
        //dd($validated);
        $item=FoodItems::create([
            'name' => $validated['form']['name'],
            'description' => $validated['form']['description']? $validated['form']['description']:".",
            'image' => $this->uploadImage($validated['image'], 'items', $validated['form']['name']),
            'food_category_id' => $validated['form']['category'],
            'is_available' => $validated['form']['status'],
        ]);
        $id=$item->toArray();
        return redirect()->route('admin.sku.create', $id['id'])->with('success', 'Item created successfully');
    }

    /**
     * @param $image
     * @param string $folder
     * @param mixed $name
     * @return string|null
     */
    private function uploadImage($image, string $folder, mixed $name): ?string
    {
        if ($image) {
            $imageName = $name . '.' . $image->getClientOriginalExtension();
            $image->storeAs('img/' . $folder, $imageName, 'public');
            return $imageName;
        }
        return null;
    }
}

