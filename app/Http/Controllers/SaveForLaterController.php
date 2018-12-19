<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Gloudemans\Shoppingcart\Facades\Cart;
use App\Product;

class SaveForLaterController extends Controller
{
    
    public function destroy($id)
    {
        Cart::instance('saveForLater')->remove($id);

        return back()->with('success', 'Producto eliminado de la lista de Deseados');
    }

    public function switchToCart($id)
    {
        $item = Cart::instance('saveForLater')->get($id);

        Cart::instance('saveForLater')->remove($id);

        $duplicates = Cart::instance('default')->search(function ($cartItem, $rowId) use ($id) {
            return $rowId === $id;
        });

        if ($duplicates->isNotEmpty()) {
            return redirect()->route('cart.index')->with('success', 'El producto ya está en su Carrito.');
        } 

        Cart::instance('default')->add($item->id, $item->name, 1, $item->price)
            ->associate('\App\Product');

        return back()->with('success', 'El producto fue agregado a su Carrito.');
    }
}
