<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(): object
    {
        $categories = Category::all();

        return response()->json($categories);
    }

    public function displayCategoryTree(): object
    {
        $categories = Category::all();

        $tree = $this->buildTree($categories);


        return view('website.features.categories.tree', compact('tree'));
    }

    public function buildTree($elements, $parent_id = 0): object
    {
        return $elements->where('parent_id', $parent_id)->map(function ($element) use ($elements) {
            $element->children = $this->buildTree($elements, $element->id);
            return $element;
        });
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show(int $id): object
    {
        $category = Category::find($id);

        if (empty($category)) return response(view('website.exceptions.404'));

        return response()->json($category);
    }
}
