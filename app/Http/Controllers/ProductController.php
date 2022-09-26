<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\View\View;
use Illuminate\View\Factory;
use Illuminate\Foundation\Application;

class ProductController extends Controller
{
    /**
     * @param Product $product
     * @return Application|View|Factory
     */
    public function __invoke(Product $product): Application|View|Factory
    {
       return view('products.show',[
           'product' => $product
       ]);
    }
}
