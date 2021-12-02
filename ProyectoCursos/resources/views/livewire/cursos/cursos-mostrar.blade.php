<div>
    <div class="mx-auto card" style="width: 18rem;">
        <img style="width:180px;" src="{{Storage::disk('public')->url($curso->foto!=null ? $curso->foto : 'images/cursos/default.png')}}" class="card-img-top mx-auto mt-4" alt="...">
        <div class="text-center card-body">
            <h5 class="card-title">{{ $curso->curso }}</h5>
            <span class="card-text">Categoria: {{ $curso->categoria }}</span><br>
            <small class="card-text">Precio: {{ $curso->precio }}</small>
            <a href="{{route('cursos.index')}}" class="btn btn-primary d-block"><i class="fa fa-home"></i> Regresar</a>
        </div>
    </div>
</div>
