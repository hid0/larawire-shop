<?php

namespace App\Http\Livewire;

use App\Product;
use Livewire\Component;
use Livewire\WithPagination;

class Products extends Component
{
    use WithPagination;

    public $search;

    public function render()
    {
        return view('livewire.products', [
            'products' => Product::paginate(10),
        ]);
    }
}
