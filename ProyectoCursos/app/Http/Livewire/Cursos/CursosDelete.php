<?php

namespace App\Http\Livewire\Cursos;

use App\Models\Curso;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;

class CursosDelete extends Component
{
    public Curso $curso;
    public $foto;
    use WithFileUploads;
    
    public function render()
    {
        return view('livewire.cursos.cursos-delete');

    }

    public function delete()
    {
        $this->curso->delete();
        return redirect(route('cursos.index'));

    }

}
