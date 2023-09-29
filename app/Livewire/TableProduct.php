<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Url;
use Livewire\WithPagination;

class TableProduct extends Component
{
    use WithPagination;

    #[Url(as: "q")]
    public $search = "";

    public $filterCategory = "";

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function render()
    {
//        $product = Product::where(
//            "category",
//            "like",
//            "%" . $this->filterCategory . "%"
//        )
//            ->where("name", "like", "%" . $this->search . "%")
//            ->paginate(10);

        //coba pakai macro
        $product = Product::search(["name"],
            $this->search)->search(["category"],
            $this->filterCategory)
            ->fastPaginate();

        $categories = Category::all();

        return view("livewire.table-product", compact("product", "categories"));
    }
}
