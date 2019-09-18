<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryFormRequest;
use App\Models\Category;

class CategoryController extends Controller
{

    public function index_category()
    {
        $categories = Category::all();

        return view('admin.category.index_category', compact('categories'));
    }

    //ADD CATEGORIES
    public function create()
    {

        return view('admin.category.add');
    }

    public function add(CategoryFormRequest $request)
    {
        $categories = new Category();
        $categories->name = $request->get('name');
        $mess = "";
        if ($categories->save()){
            $mess = "Save successfully";
        }

        return view('admin.category.add', compact('categories'))->with('mess', $mess);
    }


    //EDIT CATEGORIES
    public function update($id)
    {
        $categories = Category::find($id);
        if (empty($categories)) {

            return redirect('admin/category');
        }

        return view('admin.category.edit', compact('categories'));
    }

    public function edit(CategoryFormRequest $request, $id)
    {
        $categories = Category::find($id);
        if (empty($categories)) {
            return redirect('admin/category');
        } else {
            $categories->name = $request->get('name');
            $categories->save();
        }

        return redirect()->route('index_category', compact('categories'));
    }

    public function remove($id)
    {
        $categories = Category::destroy($id);
        if (empty($categories)) {
            abort(404);
        }

        return redirect()->route('index_category', compact('categories'));
    }
}
