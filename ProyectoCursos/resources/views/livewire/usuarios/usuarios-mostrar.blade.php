<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($usuario->foto!=null ? $usuario->foto : 'images/usuario/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $usuario->usuario }}</h5>
            <span class="card-text">Categoria: {{ $usuario->nombre_usuario }}</span><br>
            <small class="card-text">Precio: {{ $usuario->email }}</small>
            <a href="{{route('usuario.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
