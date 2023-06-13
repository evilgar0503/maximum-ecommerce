<?php

namespace App\Http\Livewire;

use App\Models\MetodoEnvio;
use App\Models\MetodoPago;
use App\Models\Pedido;
use App\Models\Producto;
use App\Models\User;
use Livewire\Component;

class PedidosAdmin extends Component
{
    public $buscador, $buscadorUser = '', $sameData = true;
    public $modalDelete, $modalCreatePedido, $modalEdit, $modalProductos;
    public $deleteId, $pedidoEdit;
    public $userSeleccionado, $nombre_env, $apellidos_env, $dni_env, $direccion_env, $cp_env, $ciudad_env, $provincia_env, $pais_env, $metodo_envio, $estadoPedido, $nombre_fac, $apellidos_fac, $dni_fac, $direccion_fac, $cp_fac, $ciudad_fac, $provincia_fac, $pais_fac, $nota_cliente, $nota_empresa;
    public $usuarios, $productosDisponibles;
    public function render()
    {
        $pedidos = Pedido::all();
        if ($this->buscadorUser != '') {
            $this->usuarios = User::where('nombre', 'like', '%' . $this->buscadorUser . '%')
                ->orWhere('email', 'like', '%' . $this->buscadorUser . '%')
                ->orWhere('apellidos', 'like', '%' . $this->buscadorUser . '%')
                ->orWhere('dni', 'like', '%' . $this->buscadorUser . '%')
                ->get();
        }
        $metodosEnvios = MetodoEnvio::all();
        $metodosPago = MetodoPago::all();
        $this->productosDisponibles = Producto::where('estado', 'like', 'activo')->get();




        return view('livewire.pedidos-admin')->with(['pedidos' => $pedidos, 'usuarios' => $this->usuarios, 'metodosEnvio' => $metodosEnvios, 'metodosPago' => $metodosPago]);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal('modalCreatePedido');
    }
    public function delete($id)
    {
        $this->deleteId = $id;
        $this->abrirModal('modalDelete');
    }

    public function edit($id)
    {
        $this->pedidoEdit = User::findOrFail($id);
        $this->actualizarDatos($this->userEdit);
        $this->abrirModal('modalEdit');
    }

    public function abrirModal($modal)
    {
        $this->$modal = true;
        $this->dispatchBrowserEvent('modalOpen');
    }
    public function cerrarModal($modal)
    {
        $this->$modal = false;
        if ($modal != 'modalProductos') {
            $this->limpiarCampos();
        }
    }

    public function anadirUser($id)
    {
        $this->userSeleccionado = User::findOrFail($id);
        $this->buscadorUser = $this->userSeleccionado->nombre . ' ' . $this->userSeleccionado->apellidos;
        $this->usuarios = '';
        $this->actualizarDatos();
    }

    public function limpiarCampos()
    {
        $this->buscadorUser = '';
        $this->userSeleccionado = '';
        $this->nombre_env = '';
        $this->apellidos_env = '';
        $this->dni_env = '';
        $this->direccion_env = '';
        $this->cp_env = '';
        $this->ciudad_env = '';
        $this->provincia_env = '';
        $this->pais_env = '';
        $this->metodo_envio = '';
        $this->estadoPedido = '';
        $this->nombre_fac = '';
        $this->apellidos_fac = '';
        $this->dni_fac = '';
        $this->direccion_fac = '';
        $this->cp_fac = '';
        $this->ciudad_fac = '';
        $this->provincia_fac = '';
        $this->pais_fac = '';
        $this->nota_cliente = '';
        $this->nota_empresa = '';
        $this->sameData = true;
    }

    public function actualizarDatos()
    {
        $this->nombre_env = $this->userSeleccionado->nombre;
        $this->apellidos_env = $this->userSeleccionado->apellidos;
        $this->dni_env = $this->userSeleccionado->dni;
        $this->direccion_env = $this->userSeleccionado->direccion;
        $this->cp_env = $this->userSeleccionado->cp;
        $this->ciudad_env = $this->userSeleccionado->ciudad;
        $this->provincia_env = $this->userSeleccionado->provincia;
        $this->pais_env = $this->userSeleccionado->pais;
    }
}
