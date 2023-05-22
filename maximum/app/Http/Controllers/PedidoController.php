<?php

namespace App\Http\Controllers;

use App\Models\MetodoPago;
use App\Models\Pedido;
use App\Models\MetodoEnvio;
use App\Models\ProductoPedido;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class PedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function review(Request $request)
    {
        $rules = [
            'nombreEnv' => 'required|string|max:255',
            'apellidosEnv' => 'required|string|max:255',
            'dniEnv' => 'required|string|size:9|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
            'direccionEnv' => 'required|string|max:255',
            'cpEnv' => 'required|string|max:10',
            'ciudadEnv' => 'required|string|max:255',
            'provinciaEnv' => 'required|string|max:255',
            'paisEnv' => 'required|string|max:255',
            'telefonoEnv' => 'required|string|max:20',
            'notaEnv' => 'nullable|longText',
        ];
        $messages = [
            'nombreEnv.required' => 'El campo Nombre es obligatorio.',
            'nombreEnv.max' => 'El campo Nombre no debe superar :max caracteres.',
            'apellidosEnv.required' => 'El campo Apellidos es obligatorio.',
            'apellidosEnv.max' => 'El campo Apellidos no debe superar :max caracteres.',
            'dniEnv.required' => 'El campo DNI es obligatorio.',
            'dniEnv.size' => 'El campo DNI debe tener una longitud de :size caracteres.',
            'dniEnv.regex' => 'El formato del campo DNI es inválido.',
            'direccionEnv.required' => 'El campo Dirección es obligatorio.',
            'direccionEnv.max' => 'El campo Dirección no debe superar :max caracteres.',
            'cpEnv.required' => 'El campo Código Postal es obligatorio.',
            'cpEnv.max' => 'El campo Código Postal no debe superar :max caracteres.',
            'ciudadEnv.required' => 'El campo Ciudad es obligatorio.',
            'ciudadEnv.max' => 'El campo Ciudad no debe superar :max caracteres.',
            'provinciaEnv.required' => 'El campo Provincia es obligatorio.',
            'provinciaEnv.max' => 'El campo Provincia no debe superar :max caracteres.',
            'paisEnv.required' => 'El campo País es obligatorio.',
            'paisEnv.max' => 'El campo País no debe superar :max caracteres.',
            'telefonoEnv.required' => 'El campo Teléfono es obligatorio.',
            'telefonoEnv.max' => 'El campo Teléfono no debe superar :max caracteres.',
        ];

        if (!$request->sameData) {
            $rules = array_merge($rules, [
                'nombreFac' => 'required|string|max:255',
                'apellidosFac' => 'required|string|max:255',
                'dniFac' => 'required|string|size:9|regex:/^[0-9]{8}[TRWAGMYFPDXBNJZSQVHLCKE]$/i',
                'direccionFac' => 'required|string|max:255',
                'cpFac' => 'required|string|max:10',
                'ciudadFac' => 'required|string|max:255',
                'provinciaFac' => 'required|string|max:255',
                'paisFac' => 'required|string|max:255',
                'telefonoFac' => 'required|string|max:20',
            ]);
            $messages = array_merge($messages, [
                'nombreFac.required' => 'El campo Nombre (facturación) es obligatorio.',
                'apellidosFac.required' => 'El campo Apellidos (facturación) es obligatorio.',
                'dniFac.required' => 'El campo DNI (facturación) es obligatorio.',
                'dniFac.size' => 'El campo DNI (facturación) debe tener una longitud de :size caracteres.',
                'dniFac.regex' => 'El formato del campo DNI (facturación) es inválido.',
                'direccionFac.required' => 'El campo Dirección (facturación) es obligatorio.',
                'direccionFac.max' => 'El campo Dirección (facturación) no debe superar :max caracteres.',
                'cpFac.required' => 'El campo Código Postal (facturación) es obligatorio.',
                'cpFac.max' => 'El campo Código Postal (facturación) no debe superar :max caracteres.',
                'ciudadFac.required' => 'El campo Ciudad (facturación) es obligatorio.',
                'ciudadFac.max' => 'El campo Ciudad (facturación) no debe superar :max caracteres.',
                'provinciaFac.required' => 'El campo Provincia (facturación) es obligatorio.',
                'provinciaFac.max' => 'El campo Provincia (facturación) no debe superar :max caracteres.',
                'paisFac.required' => 'El campo País (facturación) es obligatorio.',
                'paisFac.max' => 'El campo País (facturación) no debe superar :max caracteres.',
                'telefonoFac.required' => 'El campo Teléfono (facturación) es obligatorio.',
                'telefonoFac.max' => 'El campo Teléfono (facturación) no debe superar :max caracteres.',
            ]);
        }


        $request->validate($rules, $messages);
        $metodoEnvio = MetodoEnvio::findOrFail($request->envioEnv);
        $metodoPago = MetodoPago::findOrFail($request->metodopagoEnv);
        $cartCollection = \Cart::getContent();

        return view('shop.checkout-review')->with(['datos' => $request, 'metodoEnvio' => $metodoEnvio, 'metodoPago' => $metodoPago, 'cartCollection' => $cartCollection]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $pedidos = Pedido::all();
        $igual = true;

        //Creación pedido
        $order = new Pedido();
        $order->fecha = now()->format('Y-m-d H:i:s');
        while ($igual) {
            $cod_seguimiento = Str::random(15);
            $igual = false;
            foreach ($pedidos as $pedido) {
                if ($cod_seguimiento === $pedido->cod_seguimiento) {
                    $igual = true;
                    break;
                }
            }
            if(!$igual) {
                $order->cod_seguimiento = $cod_seguimiento;
            }
        }
        $order->user_id = auth()->user()->id;
        $order->nota_cliente = $request->notaEnv;
        $order->nota_empresa = null;
        $order->metodo_pago_id = $request->metodopagoEnv;
        $order->precio_total = $request->precioFinal;
        $order->env_nombre = $request->nombreEnv;
        $order->env_apellidos = $request->apellidosEnv;
        $order->env_dni = $request->dniEnv;
        $order->env_direccion = $request->direccionEnv;
        $order->env_cp = $request->cpEnv;
        $order->env_ciudad = $request->ciudadEnv;
        $order->env_provincia = $request->provinciaEnv;
        $order->env_pais = $request->paisEnv;
        $order->metodo_envio_id = $request->envioEnv;
        $order->estado = 'pendiente';
        if(!$request->sameData) {
            $order->fac_nombre = $request->nombreFac;
            $order->fac_apellidos = $request->apellidosFac;
            $order->fac_dni = $request->dniEnv;
            $order->fac_direccion = $request->direccionFac;
            $order->fac_cp = $request->cpFac;
            $order->fac_ciudad = $request->ciudadFac;
            $order->fac_provincia = $request->provinciaFac;
            $order->fac_pais = $request->paisFac;
        }
        $order->save();
        $products = \Cart::getContent();
        foreach($products as $product) {
            $productoPedido = new ProductoPedido();
            $productoPedido->producto_id = $product->id;
            $productoPedido->pedido_id = $order->id;
            $productoPedido->cantidad = $product->quantity;
            $productoPedido->precio_unidad = $product->price;
            $productoPedido->save();
        }
        \Cart::clear();

        return Redirect::route('order', $order->cod_seguimiento);
    }

    /**
     * Display the specified resource.
     */
    public function show(Pedido $pedido)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Pedido $pedido)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Pedido $pedido)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Pedido $pedido)
    {
        //
    }
}
