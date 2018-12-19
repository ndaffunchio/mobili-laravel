<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Category;

class ShopController extends Controller
{
    public function index()
    {   
        $pagination = 8;
        $categories = Category::all();
        /* 
        el if() es básicamente un $_GET['category']
        with() es un método para tener disponibles los datos de la relación entre tablas (en este caso entre Producto y Categoría). "category" es el método de la relación definida en el modelo Product
        whereHas() sirve para filtrar dentro de un modelo en base a una relación, con la particularidad que uno define cuál es ese filtro que se va a utilizar. En este caso la relación sigue siendo 'category' y el filtro es que el valor de la columna 'slug' coincida con el valor que viene por URL (request)
        optional() es un helper que evita mostrar un error de laravel en caso de que el objeto a evaluar sea null
        */
        if (request()->category) {
            $products = Product::with('category')->whereHas('category', function($query){
                $query->where('slug', request()->category);
            });
            $categoryName = optional($categories->where('slug', request()->category)->first())->name;
        } else {
            $products = Product::where('featured', true);
            $categoryName = 'Destacados';
        }

        if (request()->orderBy == 'menor_precio') {
            $products = $products->orderBy('price')->paginate($pagination);
        } elseif (request()->orderBy == 'mayor_precio') {
            $products = $products->orderBy('price', 'desc')->paginate($pagination);
        } else {
            $products = $products->paginate($pagination);
        }

        return view('shop', compact('products', 'categories', 'categoryName'));
    }

    public function show($slug)
    {   
        $product = Product::where('slug', $slug)->firstOrFail();
        return view('product', compact('product'));
    }

    public function search(Request $request)
    {
        $request->validate([
            'query' => 'required|min:3'
        ]);

        $query = $request->input('query');

        $products = Product::where('name', 'like', "%$query%")
                            ->orWhere('description', 'like', "%$query%")
                            ->paginate(8);
        
        return view('search-results', compact('products'));
    }
}