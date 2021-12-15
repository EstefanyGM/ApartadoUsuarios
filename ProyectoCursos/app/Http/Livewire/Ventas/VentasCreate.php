<?php

namespace App\Http\Livewire\Ventas;

use App\Models\Venta;
use App\Models\curso;
use App\Models\Usuario;
use Livewire\Component;

class VentasCreate extends Component
{
    public Venta $venta;
    public function mount()
    {
        $this->venta = new Venta();
    }
    public function render()
    {
        $cursos = curso::all();
        $usuarios = Usuario::all();
        return view('livewire.ventas.ventas-create', compact('cursos', 'usuarios'));
    }

    public function crear()
    {
        $this->validate();

        $this->venta->save();
    }

    public function rules()
    {
        return RulesVentas::Reglas();
    }
}
