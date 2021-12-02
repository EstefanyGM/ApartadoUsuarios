<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuario/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$usuario->nombre}}</h5>
          <p class="card-text">{{$usuario->email}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('usuario.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
