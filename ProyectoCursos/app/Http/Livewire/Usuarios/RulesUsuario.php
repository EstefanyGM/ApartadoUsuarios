<?php

namespace App\Http\Livewire\Usuarios;

class RulesUsuario
{

    public static function Reglas($id = null)
    {
        $validarPassword = ($id) ? 'nullable|min:8' : 'required|min:8';
        return
            [
                'usuario.nombre_usuario' => 'required|string',
                'usuario.email' => 'required|email',
                'password' => $validarPassword,
                'confirmar_password' => 'same:password',
                'foto' => 'nullable|image'
            ];
    }
}
