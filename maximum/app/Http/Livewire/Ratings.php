<?php

namespace App\Http\Livewire;

use App\Models\Valoracion;
use Livewire\Component;
use Livewire\WithPagination;

class Ratings extends Component
{
    use WithPagination;
    public $producto;
    public $ordenacion = '';
    public function render()
    {
        if($this->ordenacion == '') {
            $valoraciones = Valoracion::where('producto_id', 'like', $this->producto->id)->paginate(5);
        }
        else {
            $valoraciones = Valoracion::where('producto_id', 'like', $this->producto->id)
            ->orderBy('created_at', $this->ordenacion)
            ->paginate(5);

        }
        return view('livewire.ratings')->with(['valoraciones' => $valoraciones]);
    }
}
