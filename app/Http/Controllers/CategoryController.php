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

    public function treeView(): object
    {
        $categories = Category::all();
        $categories_tree = $this->buildTreeView($categories);
        return view('website.features.categories.tree', compact('categories_tree'));
    }

    public function buildTreeView($elements, $parent_id = 0, $current_level = 0, $previous_level = -1): string
    {
        $html = '';
        $padding = 'style="padding-left: ' . 15 * ($current_level + 1) . 'px"';
        foreach ($elements as $element) {
            if ($element['parent_id'] == $parent_id) {
                if ($current_level > $previous_level) $previous_level = $current_level;
                $current_level++;
                $html .= '<li class="list-group-item" ' . $padding . '><i class="fa fa-plus"></i> ' . $element['name'] . '-' . $current_level . '-' . $previous_level;
                $html .= $this->buildTreeView($elements, $element['id'], $current_level, $previous_level); // Recursively call the function for subcategories
                $current_level--;
                $html .= '</li>';
            }
        }

        return $html;
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
