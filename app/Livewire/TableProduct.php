<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class TableProduct extends Component
{
    use WithPagination;

    public $search = '';

    public $filterCategory = "";

    public function render()
    {
        $product = Product::where('category', 'like', '%' . $this->filterCategory . '%')
            ->where('name', 'like', '%' . $this->search . '%')
            ->paginate(5);

        $categories =  Category::all();

        return view('livewire.table-product', compact('product', 'categories'));
    }
}
