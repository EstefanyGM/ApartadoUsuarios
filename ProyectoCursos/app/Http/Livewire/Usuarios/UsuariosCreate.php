<?php

namespace App\Http\Livewire\Usuarios;

use App\Http\Livewire\Usuarios\RulesUsuario as UsuariosRulesUsuario;
use App\Models\Usuario;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosCreate extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $password;
    public $foto;
    public $confirmar_password;


    public function mount()
    {
        $this->usuario = new Usuario();
    }


    public function render()
    {
        return view('livewire.usuarios.usuarios-create');
    }

    public function crear()
    {
        $this->validate();

        $this->usuario->password = Hash::make($this->password);
        ($this->usuario->password);

        if ($this->foto != null) {
            $this->usuario->foto = Storage::disk('public')->put('images/usuario', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuario.index'));
    }

    protected function rules()
    {
        return UsuariosRulesUsuario::Reglas();
    }
}
