<?php

namespace App\Http\Livewire\Admin\Components;


use App\Models\CategoryNote;
use App\Models\FoodCategory;
use Mediconesystems\LivewireDatatables\Action;
use Mediconesystems\LivewireDatatables\BooleanColumn;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;
use Mediconesystems\LivewireDatatables\LabelColumn;

class FoodCategoryTable extends LivewireDatatable
{

    /**
     * @var string[]
     */
    protected $listeners = ['refreshCategory' => '$refresh'];

    public function builder(): \Illuminate\Database\Eloquent\Builder
    {
        return FoodCategory::query()->leftJoin('category_notes', 'food_category_id', 'food_categories.id');
    }

    public function columns(): array
    {
        return [

            Column::name('name')
                ->defaultSort('asc')
                ->searchable()
                ->editable(),
            LabelColumn::name('description')
                ->searchable()
                ->editable(),
           Column::name('category_notes.note')
               ->filterable(),
            BooleanColumn::name('status')
                ->filterable()
                ->editable()
                ->width(5)
                ->contentAlignRight(),
        ];
    }


}
