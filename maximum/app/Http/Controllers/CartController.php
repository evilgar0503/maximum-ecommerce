<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\MetodoEnvio;

class CartController extends Controller
{

    public function checkout(Request $request) {
        return view('shop.checkout');

    }
    public function shop()
    {
        $products = Producto::all();
        return view('shop')->with(['products' => $products]);
    }

    public function cart()  {
        $cartCollection = \Cart::getContent();
        $shippingMethod = MetodoEnvio::all();
        //dd($cartCollection);
        return view('shop.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection, 'shippingMethod' => $shippingMethod] );;
    }
    public function remove(Request $request){
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto(s) eliminado del carrito correctamente!');
    }

    public function add(Request$request){
        \Cart::add(array(
            'id' => $request->id,
            'name' => $request->name,
            'price' => $request->price,
            'quantity' => $request->quantity,
            'attributes' => array(
                'image' => $request->img,
                'slug' => $request->slug
            )
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Producto(s) agregado al carrito correctamente!');
    }

    public function update(Request $request){
        \Cart::update($request->id,
            array(
                'quantity' => array(
                    'relative' => false,
                    'value' => $request->quantity
                ),
        ));
        return redirect()->route('cart.index')->with('success_msg', 'Carrito actualizado!');
    }

    public function clear(){
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito limpiado!');
    }

}
