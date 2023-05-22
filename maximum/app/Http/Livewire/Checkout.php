<?php

namespace App\Http\Livewire;

use App\Models\MetodoEnvio;
use App\Models\MetodoPago;
use Livewire\Component;

class Checkout extends Component
{
    public $shipping = 1;
    public $facturacionData = true;
    public function render()
    {
        $cartCollection = \Cart::getContent();
        $methodShipping = MetodoEnvio::all();
        $methodsPayment = MetodoPago::all();

        if($this->shipping === null) {
            $method = 0;
        }
        else {
            $method = MetodoEnvio::findOrFail($this->shipping)->cargo;
        }


        return view('livewire.checkout')->with(['cartCollection' => $cartCollection, 'shippingMethod' => $method, 'methodShipping' => $methodShipping, 'methodsPayment' => $methodsPayment, 'statusFac' => $this->facturacionData]);
    }
}
