<?php

namespace App\Http\Livewire\Usuarios;

use Livewire\Component;
use App\Models\Usuario;


class UsuariosMostrar extends Component
{
    public Usuario $usuario;
    public function render()
    {
        return view('livewire.usuarios.usuarios-mostrar');
    }
}
