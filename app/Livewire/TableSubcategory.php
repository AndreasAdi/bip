<?php

namespace App\Livewire;

use App\Models\subcategory;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class TableSubcategory extends Component
{
    use WithPagination;

    #[Url(as: "q")]
    public $search = "";


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {

        $subcategories = subcategory::where("name", "like", "%" . $this->search . "%")
            ->paginate(10);
        return view('livewire.table-subcategory', compact('subcategories'));
    }
}
