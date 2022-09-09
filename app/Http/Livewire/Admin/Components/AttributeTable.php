<?php

namespace App\Http\Livewire\Admin\Components;


use App\Models\Attribute;
use Mediconesystems\LivewireDatatables\Column;
use Mediconesystems\LivewireDatatables\Http\Livewire\LivewireDatatable;

class AttributeTable extends LivewireDatatable
{
    /**
     * @var string[]
     */
    protected $listeners = ['refreshAttributeTable' => '$refresh'];

    public function builder()
    {
        return Attribute::query();
    }

    public function columns()
    {
        return[

            Column::name('name')
                ->defaultSort('asc')
                ->searchable()
                ->editable(),
            Column::name('description')
                ->searchable()
                ->editable(),
            Column::name('status')
                ->filterable()
                ->editable()
                ->width(5)
                ->contentAlignRight(),
        ];
    }
}
