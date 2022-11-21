<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Detalle;
use App\Models\Detalleventa;

class CartController extends Controller
{
    public function shop()
    {
        $products = Product::all();
       //dd($products);
        return view('shop')->withTitle('E-COMMERCE STORE | SHOP')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        //dd($cartCollection);
        return view('cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection]);;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Item is removed!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Item Agregado a sú Carrito!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Cart is Updated!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Car is cleared!');
    }

    /* public function validarcarrito(){
        $venta = new Venta();
        $venta->'Codigo' = "C0";
        $venta->'CantidadProducto' = 0.0;
        $venta->'CantidadTotal' = Cart::total();
        $venta->'TotalCosto' = Cart::total();
        $venta->'ImporteRecibido' = 0;
        $venta->'ImporteCambio' = 0;
        $venta->'Activo' = 1;
        //foreach(Cart::content)
    } */

}
