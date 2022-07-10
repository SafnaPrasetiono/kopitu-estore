<?php

namespace App\Http\Livewire\Pages\Product;

use App\Models\product;
use Livewire\Component;

class ProductRamadhan extends Component
{
    public function render()
    {
        $dataRmd = product::where('product_name', 'like', '%' . 'biskuit' . '%')
        ->orwhere('product_name', 'like', '%' . 'teh' . '%')
        ->orwhere('product_name', 'like', '%' . 'sirup' . '%')
        ->orwhere('product_name', 'like', '%' . 'susu' . '%')
        ->orwhere('product_name', 'like', '%' . 'jus' . '%')
        ->orwhere('product_name', 'like', '%' . 'kripik' . '%')
        ->orwhere('product_name', 'like', '%' . 'lorjuk' . '%')
        ->orwhere('product_name', 'like', '%' . 'jahe' . '%')
        ->orwhere('product_name', 'like', '%' . 'kentang' . '%')
        ->limit(12)->get();
        return view('livewire.pages.product.product-ramadhan', [
            'dataRmd' => $dataRmd
        ]);
    }
}
