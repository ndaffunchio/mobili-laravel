<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;


class ProductController extends Controller
{   
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index()
    {   
        $products = Product::paginate(12);
        return view('admin.products.products', compact('products'));
    }

    public function create()
    {
        $categories = \App\Category::all();
        return view('admin.products.add-product', compact('categories'));
    }

    public function store()
    {
        request()->validate([
    		'name' => 'required|string|min:3|max:150|unique:products',
            'description' => 'string|max:500|nullable',
            'price' => 'required|integer|digits_between:1,10',
            'picture' => 'image|max:2000',
            'category_id' => 'required',
            'featured' => 'numeric|digits_between:0,1',
        ]);
        
        $datos = request()->all();

        if (request()->file('picture')) {
            $ext = request()->file('picture')->extension();
            $nombre = str_slug(request()->input('name'));
            $nombre = request()->file('picture')->storeAs('products', $nombre.'.'.$ext);
            $nombre = 'storage/'.$nombre;
            $datos['picture'] = $nombre;
        }

        $product = Product::create($datos);
        
        return view('admin.products.products-success');
    }

    public function edit($id)
    {
        $product = Product::find($id);
        return view('admin.products.edit-product', compact('product'));
    }

    public function update($id)
    {
        $product = Product::find($id);
        request()->validate([
    		'name' => 'required|string|min:3|max:150|unique:products,name,'.$product->id,
            'description' => 'string|max:500|nullable',
            'price' => 'required|integer|digits_between:1,10',
            'picture' => 'image|max:2000',
            'featured' => 'numeric|digits_between:0,1',
        ]);

        $datos = request()->all();

        if (request()->file('picture')) {
            $ext = request()->file('picture')->extension();
            $nombre = str_slug(request()->input('name'));
            $nombre = request()->file('picture')->storeAs('products', $nombre.'.'.$ext);
            $nombre = 'storage/'.$nombre;
            
            $datos['picture'] = $nombre;
        }

        $product->update($datos);

        return redirect('admin/products')->with('status', 'Producto Actualizado');
    }

    public function destroy($id)
    {
    	$product = Product::find($id);
        $product->delete();
    	return redirect('admin/products')->with('status', 'Producto Borrado');
    }
}
