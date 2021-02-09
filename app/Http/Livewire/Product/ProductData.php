<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;

class ProductData extends Component
{
    public function render()
    {
        $products = Product::paginate(25);
        
        return view('livewire.product.product-data', ['products' => $products]);
    }
}
