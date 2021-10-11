<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function __invoke(Request $request, Product $produit)
    {
        if($produit->active || $request->user()->admin) {
            return view('products.show', compact('produit'));
        }
        return redirect(route('home'));
    }
}
