<?php

namespace App\Http\Livewire\Admin\Pages\Items;

use App\Models\Attribute;
use App\Models\FoodCategory;
use App\Models\FoodItems;
use Illuminate\Support\Collection;
use Livewire\Component;
use Livewire\WithFileUploads;

class Create extends Component
{
    use WithFileUploads;
    public $form= [];
    public $image;
    public $prices=[' '];
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
       $this->attributes = Attribute::getActiveAttributes()->toArray();
    }


    /*
     * Save the note input to the model 'inputs' collection.
     */
    public function addInput(): void
    {
        $this->prices[]='';
    }

    /*
     * remove the note input from the model 'inputs' collection.
     */
    public function removeInput($key): void
    {
        $this->prices->pull($key);
    }

    public function createItem(): \Illuminate\Http\RedirectResponse
    {
        $validated=$this->validate();

        $data['name'] = $validated['form']['name'];
        $data['description'] = $validated['form']['description'];
        $data['image'] = $this->uploadImage($validated['image'],'items',$validated['form']['name']);
        $data['category_id'] = $validated['form']['category'];
        $data['is_available'] = $validated['form']['status'];

        FoodItems::create($data);
        return redirect()->route('admin.item.index')->with('success', 'Item created successfully');
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
            $image->storeAs('img/'.$folder, $imageName, 'public');
            return $imageName;
        }
        return null;
    }
}
