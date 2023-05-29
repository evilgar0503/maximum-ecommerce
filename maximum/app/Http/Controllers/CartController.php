<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Producto;
use App\Models\MetodoEnvio;

class CartController extends Controller
{

    public function checkout($volver)
    {
        // $datos = $request->query();

        // dd($_GET['nombreEnv']);
        if ($volver === 1) {
            return back()->withInput();
        } else {
            return view('shop.checkout');
        }

    }
    public function shop()
    {
        $products = Producto::all();
        return view('shop')->with(['products' => $products]);
    }

    public function cart()
    {
        $cartCollection = \Cart::getContent();
        $shippingMethod = MetodoEnvio::all();
        //dd($cartCollection);
        return view('shop.cart')->withTitle('E-COMMERCE STORE | CART')->with(['cartCollection' => $cartCollection, 'shippingMethod' => $shippingMethod]);
        ;
    }
    public function remove(Request $request)
    {
        \Cart::remove($request->id);
        return redirect()->route('cart.index')->with('success_msg', 'Producto(s) eliminado del carrito correctamente!');
    }

    public function add(Request $request)
    {
        \Cart::add(
            array(
                'id' => $request->id,
                'name' => $request->name,
                'price' => $request->price,
                'quantity' => $request->quantity,
                'attributes' => array(
                    'image' => $request->img,
                    'slug' => $request->slug
                )
            )
        );
        return view('shop.cart-drop')->with('success_msg', 'Producto(s) agregado al carrito correctamente!');
    }

    public function update(Request $request)
    {
        $product = Producto::findOrFail($request->id);
        if ($request->quantity <= $product->stock) {
            \Cart::update(
                $request->id,
                array(
                    'quantity' => array(
                        'relative' => false,
                        'value' => $request->quantity
                    ),
                )
            );
            return redirect()->route('cart.index')->with('success_msg', 'Producto actualizado.');

        } else {
            return redirect()->route('cart.index')->with('error_msg', 'No disponemos de suficiente stock actualmente.');
        }

    }

    public function clear()
    {
        \Cart::clear();
        return redirect()->route('cart.index')->with('success_msg', 'Carrito limpiado!');
    }

}
