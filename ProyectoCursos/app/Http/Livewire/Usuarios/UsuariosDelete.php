<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\Curso;
use App\Models\Usuario;
use Illuminate\Support\Facades\Storage;
use Livewire\WithFileUploads;

class UsuariosDelete extends Component
{
    public Usuario $usuario;
    public $foto;
    use WithFileUploads;
    public function render()
    {
        return view('livewire.usuarios.usuarios-delete');
    }


    public function delete()
    {
        $this->usuario->delete();
        return redirect(route('usuario.index'));

    }
}
