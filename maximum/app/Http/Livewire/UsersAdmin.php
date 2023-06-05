<?php

namespace App\Http\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithFileUploads;


class UsersAdmin extends Component
{
    use WithFileUploads;
    public $buscador = '';
    public $nombre, $apellidos, $dni, $email, $password, $telefono, $pais, $provincia, $ciudad, $direccion, $fecha_nacimiento, $cp, $rol;
    public $modalCreateUser = false, $modalDelete = false, $modalEditUser = false;
    public $deleteId, $userEdit;

    public $rules = [
        'nombre' => 'required|string|max:255',
        'apellidos' => 'nullable|string|max:255',
        'dni' => 'required|string|regex:/^[0-9]{8}[A-Za-z]{1}$/',
        'email' => ['required', 'email'],
        'telefono' => 'required|string|digits:9',
        'pais' => 'nullable|string',
        'provincia' => 'nullable|string',
        'ciudad' => 'nullable|string',
        'direccion' => 'nullable|string|max:255',
        'fecha_nacimiento' => 'required|date',
        'cp' => 'nullable|numeric|digits:5',
        'rol' => 'required',
    ];

    public $messages = [
        'nombre.required' => 'El campo Nombre es obligatorio.',
        'nombre.string' => 'El campo Nombre debe ser una cadena de texto.',
        'nombre.max' => 'El campo Nombre no debe superar :max caracteres.',
        'apellidos.string' => 'El campo Apellidos debe ser una cadena de texto.',
        'apellidos.max' => 'El campo Apellidos no debe superar :max caracteres.',
        'dni.required' => 'El campo DNI es obligatorio.',
        'dni.string' => 'El campo DNI debe ser una cadena de texto.',
        'dni.regex' => 'El campo DNI no tiene el formato correcto.',
        'email.required' => 'El campo Email es obligatorio.',
        'email.email' => 'El campo Email debe ser un correo electrónico válido.',
        'email.unique' => 'Este correo electrónico ya está registrado.',
        'telefono.required' => 'El campo Teléfono es obligatorio.',
        'telefono.numeric' => 'El campo Teléfono debe ser un número.',
        'telefono.digits' => 'El campo Teléfono debe tener :digits dígitos.',
        'pais.string' => 'El campo País debe ser una cadena de texto.',
        'provincia.string' => 'El campo Provincia debe ser una cadena de texto.',
        'ciudad.string' => 'El campo Ciudad debe ser una cadena de texto.',
        'direccion.string' => 'El campo Dirección debe ser una cadena de texto.',
        'direccion.max' => 'El campo Dirección no debe superar :max caracteres.',
        'fecha_nacimiento.required' => 'El campo Fecha de Nacimiento es obligatorio.',
        'fecha_nacimiento.date' => 'El campo Fecha de Nacimiento debe ser una fecha válida.',
        'cp.numeric' => 'El campo CP debe ser un número.',
        'cp.digits' => 'El campo CP debe tener :digits dígitos.',
        'rol.required' => 'El campo Rol es obligatorio.',
        'rol.in' => 'El campo Rol debe ser cliente, empresa o admin.',
    ];

    public function render()
    {
        $users = User::where('nombre', 'like', '%' . $this->buscador . '%')
            ->orWhere('apellidos', 'like', '%' . $this->buscador . '%')
            ->orWhere('dni', 'like', '%' . $this->buscador . '%')
            ->orWhere('email', 'like', '%' . $this->buscador . '%')
            ->get(); // usuarios filtrados

        return view('livewire.users-admin')->with('users', $users);
    }

    public function crear()
    {
        $this->limpiarCampos();
        $this->abrirModal('modalCreateUser');
    }
    public function delete($id)
    {
        $this->deleteId = $id;
        $this->abrirModal('modalDelete');
    }

    public function edit($id)
    {
        $this->userEdit = User::findOrFail($id);
        $this->actualizarDatos($this->userEdit);
        $this->abrirModal('modalEditUser');
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
        $this->apellidos = '';
        $this->dni = '';
        $this->email = '';
        $this->password = '';
        $this->telefono = '';
        $this->pais = '';
        $this->provincia = '';
        $this->ciudad = '';
        $this->direccion = '';
        $this->fecha_nacimiento = '';
        $this->cp = '';
        $this->rol = '';
    }

    public function editUser()
    {

        $this->validate($this->rules, $this->messages);
        $user = User::findOrFail($this->userEdit->id);


        $user->nombre = $this->nombre;
        $user->apellidos = $this->apellidos;
        $user->dni = $this->dni;
        $user->email = $this->email;
        $user->password = $this->password;
        $user->telefono = $this->telefono;
        $user->pais = $this->pais;
        $user->provincia = $this->provincia;
        $user->ciudad = $this->ciudad;
        $user->direccion = $this->direccion;
        $user->fecha_nacimiento = $this->fecha_nacimiento;
        $user->cp = $this->cp;
        $user->rol = $this->rol;
        $user->save();
        $this->cerrarModal('modalEditUser');
        $this->limpiarCampos();
        session()->flash('message', 'Usuario actualizado correctamente.');

    }
    public function createUser()
    {
        $this->password = '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi';
        try {
            $validatedData = $this->validate($this->rules, $this->messages);

        } catch (\Illuminate\Validation\ValidationException $e) {
            $errors = $e->validator->errors();
            dd($errors);
        }

        // Luego, creamos el nuevo user
        $user = User::create([
            'nombre' => $this->nombre,
            'apellidos' => $this->apellidos,
            'dni' => $this->dni,
            'email' => $this->email,
            'password' => $this->password,
            'telefono' => $this->telefono,
            'pais' => $this->pais,
            'provincia' => $this->provincia,
            'ciudad' => $this->ciudad,
            'direccion' => $this->direccion,
            'fecha_nacimiento' => $this->fecha_nacimiento,
            'cp' => $this->cp,
            'rol' => $this->rol,
            'ruta_imagen' => 'img/users/defaultProfile.png',
        ]);
        $user->save();

        $this->cerrarModal('modalCreateUser');
        $this->limpiarCampos();
        // También puedes mostrar un mensaje de éxito.
        session()->flash('message', 'Usuario creado correctamente.');

    }

    public function deleteUser($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        $this->cerrarModal('modalDelete');
        session()->flash('message', 'Usuario eliminado correctamente.');

    }

    public function actualizarDatos(User $user)
    {
        $this->limpiarCampos();
        $this->nombre = $user->nombre;
        $this->apellidos = $user->apellidos;
        $this->dni = $user->dni;
        $this->email = $user->email;
        $this->telefono = $user->telefono;
        $this->pais = $user->pais;
        $this->provincia = $user->provincia;
        $this->ciudad = $user->ciudad;
        $this->direccion = $user->direccion;
        $this->fecha_nacimiento = $user->fecha_nacimiento;
        $this->cp = $user->cp;
        $this->rol = $user->rol;
    }
}
