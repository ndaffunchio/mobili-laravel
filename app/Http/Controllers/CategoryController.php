<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;

class CategoryController extends Controller
{
    public function index()
    {   
        $categories = Category::all();
        return view('admin.categories.categories', compact('categories'));
    }

    public function create()
    {
        return view('admin.categories.add-category');
    }

    public function store()
    {
        request()->validate([
    		'name' => 'required|alpha_dash|min:3|max:150|unique:categories,name',
        ]);

        $category = Category::create(request()->all());
        
        return view('admin.categories.categories-success');
    }

    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.categories.edit-category', compact('category'));
    }

    public function update($id)
    {
        $category = Category::find($id);
        request()->validate([
    		'name' => 'required|alpha_dash|min:3|max:150|unique:categories,name,'.$category->id,
        ]);

        $category->update(request()->all());

        return redirect('admin/categories')->with('status', 'Categoría Actualizada');
    }

    public function destroy($id)
    {
    	$category = Category::find($id);
        $category->delete();
    	return redirect('admin/categories')->with('status', 'Categoría Eliminada');
    }
}
