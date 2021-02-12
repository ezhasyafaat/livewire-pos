<?php

namespace App\Http\Livewire\Product;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;
use Livewire\WithFileUploads;

class ProductData extends Component
{

    public $code, $name, $category, $stock, $unit, $outprice, $inprice, $supplier, $description, $photo, $_id;
    public $isModal = 0;
    use WithPagination;
    use WithFileUploads;

    public function render()
    {
        $products = Product::paginate(25);
        
        return view('livewire.product.product-data', ['products' => $products]);
    }

    public function openModal()
    {
        $this->isModal = true;
    }

    public function closeModal()
    {
        $this->isModal = false;
    }

    public function resetInputField()
    {
        $this->code         = '';
        $this->name         = ''; 
        $this->category     = ''; 
        $this->stock        = ''; 
        $this->unit         = ''; 
        $this->outprice     = ''; 
        $this->inprice      = ''; 
        $this->description  = ''; 
        $this->photo        = ''; 
        $this->supplier     = '';
    }

    public function create()
    {
        $this->resetInputField();
        $this->openModal();
    }

    public function store()
    {
        $request = $this->validate([
            'code'          => 'required|min:4|max:20|unique:products,code',
            'name'          => 'required|max:25',
            'category'      => 'required',
            'stock'         => 'required',
            'unit'          => 'required',
            'outprice'      => 'required',
            'inprice'       => 'required',
            'description'   => 'required',
            'photo'         => 'required|image|mimes:jpg,jpeg,png|max:2048',
            'supplier'      => 'required',
        ]);
        
        $imageName = md5($this->photo . microtime()).'.'.$this->photo->exntension();
        $this->image->storeAs('product', $imageName);

        try {
            $createProduct = Product::create([
                'code'          => $this->code,
                'name'          => $this->name,
                'category'      => $this->category,
                'stock'         => $this->stock,
                'unit'          => $this->unit,
                'outprice'      => $this->outprice,
                'inprice'       => $this->inprice,
                'description'   => $this->description,
                'image'         => $imageName,
                'supplier'      => $this->supplier,
                'uploaded_by'   => Auth::user()->name,
                'updated_by'    => Auth::user()->name,
            ]);
            session()->flash('success', $this->name. ' Ditambahkan');
            $this->resetInputField();
            $this->closeModal();
        } catch (\Exception $e) {
           dd($e->getMessage());
        }
    }
}
