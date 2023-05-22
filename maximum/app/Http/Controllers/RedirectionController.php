<?php

namespace App\Http\Controllers;

use App\Models\Pedido;
use App\Models\Producto;
use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function blog()
    {
        return view('blog.blog');
    }

    public function dashboard()
    {
        return view('dashboard');
    }
    public function blogCreate()
    {
        return view('blog.create');
    }

    public function index()
    {
        $productos = Producto::all();
        return view('welcome')->with('productos', $productos);
    }

    public function contact()
    {
        return view('contact');
    }

    public function shop()
    {
        return view('shop.shop');
    }

    public function orderComplete($numero_seguimiento)
    {
        $order = Pedido::where('cod_seguimiento', $numero_seguimiento)->get();
        if ($order->count() === 0) {
            abort(404);
        } else {
            return view('shop.order-complete', ['order' => $order]);

        }
    }

    public function myOrders() {
        return view('profile.orders');
    }

}
