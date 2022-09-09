<?php

namespace App\Http\Livewire\Admin\Pages;

use App\Models\FoodCategory;
use Illuminate\Support\Collection;
use Livewire\Component;
use Route;

class Category extends Component
{
    public array $form = ['name' => '', 'description' => ''];
    public Collection $notes;

    /**
     * Get validator rules.
     *
     * @return array
     */
    protected array $rules = [
        'form.name' => 'string|required|max:50|unique:App\Models\FoodCategory,name',
        'form.description' => 'string|max:200|nullable',
        'form.status' => 'boolean|required',
        'notes.*' => 'string|max:200|nullable',
    ];
    /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    protected array $validationAttributes = [
        'form.name' => 'Category Name',
        'form.description' => 'Category Description',
        'form.status' => 'Category status',
        'notes.*' => 'Category Note',
    ];

    public function render(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('livewire.admin.pages.category')
            ->layout('layouts.dash');
    }


    public function mount(): void
    {
        $this->form['status'] = true;
        $this->notes = new Collection();
        $this->fill([
            'notes' => collect(['']),
        ]);


    }


    /*
     * Save the note input to the model 'inputs' collection.
     */
    public function addInput(): void
    {
        $this->notes->push(['']);
    }

    /*
     * remove the note input from the model 'inputs' collection.
     */
    public function removeInput($key): void
    {
        $this->notes->pull($key);
    }

    /*
     * create a new category
     */
    public function createCategory(): \Illuminate\Http\RedirectResponse
    {

        $validated = $this->validate();

        $category = FoodCategory::create([
            'name' => $validated['form']['name'],
            'description' => $validated['form']['description'],
            'status' => $validated['form']['status'],
        ]);

        if ($validated['notes'] !== null) {
             foreach ($validated['notes'] as $note) {
                $category->note()->create([
                    'food_category_id' => $category->id,
                    'note' => $note,
                ]);
            }

        }

        $this->reset();
        $this->emitTo('admin.components.food-category-table', 'refreshCategory');
        return redirect(route('admin.category'))->with('success', 'Category created successfully');

    }

}

