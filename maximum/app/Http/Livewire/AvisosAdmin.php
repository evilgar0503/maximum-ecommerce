<?php

namespace App\Http\Livewire;

use App\Models\Avisos;
use Livewire\Component;

class AvisosAdmin extends Component
{
    public $modalNoticia, $modalDelete;
    public $nombre, $email, $asunto, $cuerpo, $estado, $estadoBuscador, $buscador;
    public $deleteId, $verAviso;

    public $rules = [
        'nombre' => 'required|string|max:255',
        'cargo' => 'required|numeric',
    ];

    public function render()
    {
        $avisos = Avisos::where(function ($query) {
            $query->where('nombre', 'like', '%' . $this->buscador . '%')
                ->orWhere('email', 'like', '%' . $this->buscador . '%');
        })->when(!empty($this->buscador), function ($query) {
            return $query->where('estado', 'like', $this->estadoBuscador);
        })->get();

        return view('livewire.avisos-admin')->with('avisos', $avisos);
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

    public function ver($id)
    {
        $this->verAviso = Avisos::findOrFail($id);
        $this->actualizarDatos($this->verAviso);
        $this->abrirModal('modalNoticia');
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
        $this->email = '';
        $this->asunto = '';
        $this->cuerpo = '';
        $this->estado = '';
    }

    public function createMetodoEnvio()
    {
        $this->validate($this->rules, $this->messages);

        // Luego, creamos el nuevo producto
        $metodo = MetodoEnvio::create([
            'nombre' => $this->nombre,
            'cargo' => $this->cargo,
        ]);
        $metodo->save();

        $this->cerrarModal('modalCreateMetodo');
        $this->limpiarCampos();
        // También puedes mostrar un mensaje de éxito.
        session()->flash('message', 'Método creado correctamente.');

    }

    public function deleteAviso($id)
    {

        $aviso = Avisos::findOrFail($id);
        $aviso->delete();
        $this->cerrarModal('modalDelete');
    }

    public function actualizarDatos(Avisos $aviso)
    {
        $this->limpiarCampos();
        $this->nombre = $aviso->nombre;
        $this->email = $aviso->email;
        $this->asunto = $aviso->asunto;
        $this->cuerpo = $aviso->cuerpo;
        $this->estado = $aviso->estado;

    }
}
