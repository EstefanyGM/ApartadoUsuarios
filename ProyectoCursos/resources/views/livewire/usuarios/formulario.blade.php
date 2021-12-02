<div class="row">


    <div wire:loading wire:target="foto" class="clearfix">
        <div class="spinner-border float-right" role="status">
          <span class="sr-only">Loading...</span>
        </div>
      </div>


    <div class="col-4">

        @if ($foto != null)
        <img style="width: 230px;height:230px;" src="{{ $foto->temporaryUrl() }}" alt="">
    @else
        <img style="width: 230px;height:230px;"
            src="{{ Storage::disk('public')->url($usuario->foto != null ? $usuario->foto : 'images/usuario/default.png') }}"
            alt="">
    @endif

        <form>
            <div class="form-group">
                <label for="exampleFormControlFile1">Subir imagen</label>
                <input wire:model="foto" type="file" class="form-control-file" id="exampleFormControlFile1">
                @error('foto') <span class="text-danger">{{ $message }}</span>@enderror
            </div>
        </form>
    </div>

    <div class="mx-auto col-6">
        <div class="form-group">
            <label>Nombre</label>
            <input wire:model.defer="usuario.nombre_usuario" type="text" class="form-control">
            @error('usuario.nombre_usuario') <span class="text-danger">{{ $message }}</span>@enderror
        </div>

        <div class="form-group">
            <label>Email</label>
            <input wire:model.defer="usuario.email" type="text" class="form-control">
            @error('usuario.email') <span class="text-danger">{{ $message }}</span>@enderror

        </div>


        <div class="form-group">
            <label>Password</label>
            <input wire:model="usuario.password" type="text" class="form-control">
        </div>



    </div>



</div>
