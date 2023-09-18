<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Database;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): object
    {
        $products = Product::all();
        foreach ($products as $product) {
            $product->category_name = $product->category()->pluck('name')->first();
            $product->images = $product->images()->get();
            $product->reviews = $product->reviews()->get();
        }
        return response()->json($products);
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id):object
    {
        $product = Product::find($id);

        if (empty($product)) return response(view('website.exceptions.404'));

        $product->category_name = $product->category()->pluck('name')->first();

        return response()->json($product);
    }

}
