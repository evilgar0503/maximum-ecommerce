<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Illuminate\Support\Facades\Redirect;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component
{

    use WithPagination;
    public $precio = '';

    public function render()
    {
        if ($this->precio === '') {
            $productos = Producto::where('estado', 'like', 'activo')->paginate(6);
        } else {
            $productos = Producto::orderBy('precio', $this->precio)->paginate(6);
        }
        return view('livewire.shop', ['productos' => $productos]);
    }

    public function addToCart($productId)
    {
        $product = Producto::findOrFail($productId);
        if ($product) {
            \Cart::add(['id' => $product->id, 'name' => $product->nombre, 'price' => $product->precio, 'quantity' => 1, 'attributes' => ['image' => $product->ruta_imagen, 'slug' => $product->slug]]);

        }
        $this->redirect($this->getCurrentUrl());

    }

    public function getCurrentUrl()
    {
        return "/products";
    }
}
