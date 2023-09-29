<?php

namespace App\Livewire;

use App\Models\Brand;
use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class TableBrand extends Component
{
    use WithPagination;

    public $search = "";

    public $filterCategory = "";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
//        $brand = Brand::where(
//            "category_id",
//            "like",
//            "%" . $this->filterCategory . "%"
//        )
//            ->where("name", "like", "%" . $this->search . "%")
//            ->paginate(5);


        //Coba Pakai Macro
        $brand = Brand::search("name",$this->search)
                ->paginate(10);

        $categories = Category::all();
        return view("livewire.table-brand", compact("brand", "categories"));
    }
}
