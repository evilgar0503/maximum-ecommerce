<?php

namespace App\Http\Livewire;

use App\Models\Producto;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Http\Request;

class ProductsAdmin extends Component
{
    use WithFileUploads;
    public $buscadorProductos, $estadoBuscador, $ordenacion;
    public $nombre, $descripcion, $ingredientes, $instrucciones, $marca, $sabor, $edad, $peso, $precio, $precio_empresa, $precio_descuento, $stock, $imagen, $estado;
    public $modalCreateProduct = false, $modalDelete = false, $modalEdit = false;
    public $deleteId, $productoEdit;

    public $rules = [
        'nombre' => 'required|string|max:255',
        'descripcion' => 'required|string',
        'ingredientes' => 'required|string',
        'instrucciones' => 'required|string',
        'marca' => 'required|string|max:255',
        'sabor' => 'required|string|max:255',
        'edad' => 'required|string|max:255',
        'peso' => 'required|numeric',
        'precio' => 'required|numeric',
        'precio_empresa' => 'required|numeric',
        'precio_descuento' => 'nullable|numeric',
        'stock' => 'required|integer',
        'estado' => 'required',
    ];

    public $messages = [
        'nombre.required' => 'El campo Nombre es obligatorio.',
        'nombre.string' => 'El campo Nombre debe ser una cadena de texto.',
        'nombre.max' => 'El campo Nombre no debe superar :max caracteres.',
        'descripcion.required' => 'El campo Descripción es obligatorio.',
        'descripcion.string' => 'El campo Descripción debe ser una cadena de texto.',
        'ingredientes.required' => 'El campo Ingredientes es obligatorio.',
        'ingredientes.string' => 'El campo Ingredientes debe ser una cadena de texto.',
        'instrucciones.required' => 'El campo Instrucciones es obligatorio.',
        'instrucciones.string' => 'El campo Instrucciones debe ser una cadena de texto.',
        'marca.required' => 'El campo Marca es obligatorio.',
        'marca.string' => 'El campo Marca debe ser una cadena de texto.',
        'marca.max' => 'El campo Marca no debe superar :max caracteres.',
        'sabor.required' => 'El campo Sabor es obligatorio.',
        'sabor.string' => 'El campo Sabor debe ser una cadena de texto.',
        'sabor.max' => 'El campo Sabor no debe superar :max caracteres.',
        'edad.required' => 'El campo Edad es obligatorio.',
        'edad.string' => 'El campo Edad debe ser una cadena de texto.',
        'edad.max' => 'El campo Edad no debe superar :max caracteres.',
        'peso.required' => 'El campo Peso es obligatorio.',
        'peso.numeric' => 'El campo Peso debe ser un número.',
        'precio.required' => 'El campo Precio es obligatorio.',
        'precio.numeric' => 'El campo Precio debe ser un número.',
        'precio_empresa.required' => 'El campo Precio Empresa es obligatorio.',
        'precio_empresa.numeric' => 'El campo Precio Empresa debe ser un número.',
        'precio_descuento.numeric' => 'El campo Precio Descuento debe ser un número.',
        'stock.required' => 'El campo Stock es obligatorio.',
        'stock.integer' => 'El campo Stock debe ser un número entero.',
        'estado.required' => 'El campo Estado es obligatorio.',
    ];
    public function render()
    {
        $productos = Producto::where(function ($query) {
            $query->where('nombre', 'like', '%' . $this->buscadorProductos . '%')
                ->orWhere('marca', 'like', '%' . $this->buscadorProductos . '%');
        })->when(!empty($this->estadoBuscador), function ($query) {
            return $query->where('estado', 'like', $this->estadoBuscador);
        })->when(!empty($this->ordenacion), function ($query) {
            return $query->orderBy('precio', $this->ordenacion);
        })->get();

        return view('livewire.products-admin')->with('productos', $productos);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal('modalCreateProduct');
    }
    public function delete($id)
    {
        $this->deleteId = $id;
        $this->abrirModal('modalDelete');
    }

    public function edit($id)
    {
        $this->productoEdit = Producto::findOrFail($id);
        $this->actualizarDatos($this->productoEdit);
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
    }

    public function limpiarCampos()
    {
        $this->nombre = '';
        $this->descripcion = '';
        $this->ingredientes = '';
        $this->instrucciones = '';
        $this->marca = '';
        $this->sabor = '';
        $this->edad = '';
        $this->peso = '';
        $this->precio = '';
        $this->precio_empresa = '';
        $this->precio_descuento = '';
        $this->stock = '';
        $this->imagen = '';
        $this->estado = '';
    }

    public function editProduct()
    {

        $this->validate($this->rules, $this->messages);
        $producto = Producto::findOrFail($this->productoEdit->id);

        if (!empty($this->imagen) && $this->imagen != $producto->ruta_imagen && $this->imagen->getRealPath()) {

            $nombrefoto = time() . '-' . $this->imagen->getClientOriginalName();
            $ruta = "storage/img/" . $nombrefoto;
            $this->imagen->storeAs('public/img/', $nombrefoto);
            $producto->ruta_imagen = $ruta;
        }
        $producto->nombre = $this->nombre;
        $producto->descripcion = $this->descripcion;
        $producto->ingredientes = $this->ingredientes;
        $producto->instrucciones = $this->instrucciones;
        $producto->marca = $this->marca;
        $producto->sabor = $this->sabor;
        $producto->edad = $this->edad;
        $producto->peso = $this->peso;
        $producto->precio = $this->precio;
        $producto->precio_empresa = $this->precio_empresa;
        $producto->precio_descuento = $this->precio_descuento;
        $producto->stock = $this->stock;
        $producto->estado = $this->estado;
        $producto->save();
        $this->cerrarModal('modalEdit');
        $this->limpiarCampos();
        session()->flash('message', 'Producto actualizado correctamente.');

    }
    public function createProduct()
    {
        $this->validate($this->rules, $this->messages);

        if ($this->imagen && $this->imagen->getRealPath()) {

            $nombrefoto = time() . '-' . $this->imagen->getClientOriginalName();
            $ruta = "storage/img/" . $nombrefoto;
            $this->imagen->storeAs('public/img/', $nombrefoto);

        }


        // Luego, creamos el nuevo producto
        $producto = Producto::create([
            'nombre' => $this->nombre,
            'descripcion' => $this->descripcion,
            'ingredientes' => $this->ingredientes,
            'instrucciones' => $this->instrucciones,
            'marca' => $this->marca,
            'sabor' => $this->sabor,
            'edad' => $this->edad,
            'peso' => $this->peso,
            'precio' => $this->precio,
            'precio_empresa' => $this->precio_empresa,
            'precio_descuento' => $this->precio_descuento,
            'stock' => $this->stock,
            'ruta_imagen' => $ruta,
            'estado' => $this->estado,
        ]);
        $producto->save();

        $this->cerrarModal('modalCreateProduct');
        $this->limpiarCampos();
        // También puedes mostrar un mensaje de éxito.
        session()->flash('message', 'Producto creado correctamente.');

    }

    public function deleteProducto($id)
    {

        $producto = Producto::findOrFail($id);
        $producto->delete();
        $this->cerrarModal('modalDelete');
    }

    public function actualizarDatos(Producto $producto)
    {
        $this->limpiarCampos();
        $this->nombre = $producto->nombre;
        $this->descripcion = $producto->descripcion;
        $this->ingredientes = $producto->ingredientes;
        $this->instrucciones = $producto->instrucciones;
        $this->marca = $producto->marca;
        $this->sabor = $producto->sabor;
        $this->edad = $producto->edad;
        $this->peso = $producto->peso;
        $this->precio = $producto->precio;
        $this->precio_empresa = $producto->precio_empresa;
        $this->precio_descuento = $producto->precio_descuento;
        $this->stock = $producto->stock;
        $this->imagen = $producto->ruta_imagen;
        $this->estado = $producto->estado;
    }
}
