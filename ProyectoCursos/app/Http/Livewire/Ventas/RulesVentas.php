<?php

namespace App\Http\Livewire\Ventas;

class RulesVentas
{

    public static function Reglas()
    {
        return [
            'venta.id_usuario' => 'required',
            'venta.id_curso' => 'required',

        ];
    }
}
