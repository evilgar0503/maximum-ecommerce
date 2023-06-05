<?php

namespace App\Http\Livewire;

use App\Models\MetodoEnvio;
use Livewire\Component;

class MetodoEnvioAdmin extends Component
{
    public $modalCreateMetodo, $modalEditMetodo, $modalDelete;
    public $nombre;
    public $deleteId, $metodoEdit;

    public $rules = [
        'nombre' => 'required|string|max:255'
    ];

    public $messages = [
        'nombre.required' => 'El campo Nombre es obligatorio.',
        'nombre.string' => 'El campo Nombre debe ser una cadena de texto.',
        'nombre.max' => 'El campo Nombre no debe superar :max caracteres.'
    ];
    public function render()
    {
        $metodos = MetodoEnvio::all();

        return view('livewire.metodo-envio-admin')->with('metodos', $metodos);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal('modalCreateMetodo');
    }
    public function delete($id)
    {
        $this->deleteId = $id;
        $this->abrirModal('modalDelete');
    }

    public function edit($id)
    {
        $this->metodoEdit = metodoEnvio::findOrFail($id);
        $this->actualizarDatos($this->metodoEdit);
        $this->abrirModal('modalEditMetodo');
    }

    public function abrirModal($modal)
    {
        $this->$modal = true;
        $this->dispatchBrowserEvent('modalOpen');
    }
    public function cerrarModal($modal)
    {
        $this->$modal = false;
    }

    public function limpiarCampos()
    {
        $this->nombre = '';
    }

    public function editMetodo()
    {

        $this->validate($this->rules, $this->messages);
        $producto = MetodoEnvio::findOrFail($this->metodoEdit->id);

        $producto->nombre = $this->nombre;
        $producto->save();
        $this->cerrarModal('modalEditMetodo');
        $this->limpiarCampos();
        session()->flash('message', 'Método actualizado correctamente.');

    }
    public function creatMetodoEnvio()
    {
        $this->validate($this->rules, $this->messages);

        // Luego, creamos el nuevo producto
        $metodo = MetodoEnvio::create([
            'nombre' => $this->nombre,
        ]);
        $metodo->save();

        $this->cerrarModal('modalCreateMetodo');
        $this->limpiarCampos();
        // También puedes mostrar un mensaje de éxito.
        session()->flash('message', 'Método creado correctamente.');

    }

    public function deleteMetodo($id)
    {

        $producto = MetodoEnvio::findOrFail($id);
        $producto->delete();
        $this->cerrarModal('modalDelete');
    }

    public function actualizarDatos(MetodoEnvio $metodo)
    {
        $this->limpiarCampos();
        $this->nombre = $metodo->nombre;
    }
}
