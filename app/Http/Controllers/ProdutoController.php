<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    //Mostrar produtos
    public function show(Product $product)
    {
        return view('product', [
            'product' => $product
        ]);
    }
}
