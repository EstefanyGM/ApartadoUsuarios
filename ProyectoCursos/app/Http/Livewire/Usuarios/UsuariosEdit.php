<?php

namespace App\Http\Livewire\Usuarios;

use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class UsuariosEdit extends Component
{
    use WithFileUploads;
    public Usuario $usuario;
    public $foto;
    public function render()
    {
        return view('livewire.usuarios.usuarios-edit');
    }

    public function editar()
    {
        $this->validate();
        if ($this->foto != null) {
            if ($this->usuario->foto != null) {
                Storage::disk('public')->delete($this->usuario->foto);
            }
            $this->usuario->foto = Storage::disk('public')->put('images/usuario', $this->foto);
        }
        $this->usuario->save();
        return redirect(route('usuario.index'));
    }
    protected function rules()
    {
        return RulesUsuario::Reglas();
    }
}
