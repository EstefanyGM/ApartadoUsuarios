<div class="mb-3">
    <label class="form-label">Usurios</label>
    <select wire:model="venta.id_usuario" class="form-control">
      <option value=""></option>

    @foreach ( $usuarios as $usuario)
    <option value = "{{ $usuario->id }}">{{$usuario->nombre_usuario}}</option>
    @endforeach
    </select>
  </div>
  <div class="mb-3">
    <label class="form-label">Cursos</label>
    <select wire:model="venta.id_curso" class="form-control">
        <option value=""></option>
    @foreach ($cursos as $curso)
    <option value = "{{ $curso->id }}">{{$curso->curso}}</option>
    @endforeach
    </select>
  </div>
