<?php

namespace App\Http\Controllers;

use App\Product;
use App\ProductImage;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function store(Request $request)
    {

        $product = new Product;
        $product->title = $request->title;

        $product->save();

        $productImage = new ProductImage;
        $productImage->product = $product->id;

        $productImage->path = $request->file('prd_img')->store('images');

        $productImage->save();
        unset($productImage);

        //Debug: dd($request->file('prd_img')->storeAs('images', "$request->title.png"));
    }

}
