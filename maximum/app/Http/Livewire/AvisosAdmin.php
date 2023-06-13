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
        })->when(!empty($this->estadoBuscador), function ($query) {
            return $query->where('estado', 'like', $this->estadoBuscador);
        })
        ->orderBy('created_at', 'desc')->get();

        return view('livewire.avisos-admin')->with('avisos', $avisos);
    }

    public function delete($id)
    {
        $this->deleteId = $id;
        $this->abrirModal('modalDelete');
    }

    public function ver($id)
    {
        $this->verAviso = Avisos::findOrFail($id);
        $this->verAviso->estado = 'solucionado';
        $this->verAviso->save();
        $this->actualizarDatos($this->verAviso);
        $this->abrirModal('modalNoticia');
    }
    public function noVisto($id)
    {
        $this->verAviso = Avisos::findOrFail($id);
        $this->verAviso->estado = 'pendiente';
        $this->verAviso->save();
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
