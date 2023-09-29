<?php

namespace App\Livewire;

use App\Models\Pesan;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

class TableMessage extends Component
{
    use WithPagination;

    #[Url(as: "q")]
    public string $search = "";

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function render()
    {
        $messages = Pesan::search(["name", "company"], $this->search)
            ->fastPaginate(10);

        return view("livewire.table-message", compact("messages"));
    }
}
