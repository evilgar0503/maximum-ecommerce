<?php

namespace App\Http\Controllers;

use App\Models\Producto;
use Illuminate\Http\Request;

class RedirectionController extends Controller
{
    public function blog() {
        return view('blog.blog');
    }

    public function blogCreate() {
        return view('blog.create');
    }

    public function index() {
        $productos = Producto::all();
        return view('welcome')->with('productos', $productos);
    }

    public function contact() {
        return view('contact');
    }

    public function shop() {
        $productos = Producto::all();
        return view('shop.shop')->with('productos', $productos);
    }

}
