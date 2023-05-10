<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithPagination;

class Shop extends Component {

    use WithPagination;
    public $precio = '';

    public function render()
    {
        if($this->precio === '') {
            $productos = Producto::paginate(6);
        }
        else {
            $productos = Producto::orderBy('precio', $this->precio)->paginate(6);
        }
        return view('livewire.shop', ['productos' => $productos]);
    }
}
