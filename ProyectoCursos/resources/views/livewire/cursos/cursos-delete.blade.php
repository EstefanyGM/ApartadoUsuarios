<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($curso->foto!=null ? $curso->foto : 'images/cursos/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="card-body">
          <h5 class="card-title">{{$curso->curso}}</h5>
          <p class="card-text">{{$curso->categoria}}</p>
          <button wire:click="delete" class="btn btn-primary btn-sm">Confirmar</button>
          <a href="{{route('cursos.index')}}" class="btn btn-secondary btn-sm">Cancelar</a>
        </div>
      </div>
</div>
