<div wire:init="cargando">

    <div class="row">
        <div class="col-md-4">
            <div class="mb-3 input-group">
                <span class="input-group-text" id="basic-addon1"><i class="fa fa-search"></i></span>
                <input wire:model="search" type="search" class="form-control" placeholder="Buscar..."
                    aria-label="Username" aria-describedby="basic-addon1">
            </div>


        </div>

        <div class="col-md-8">
            <div class="float-right mb-2">
                <a href="{{ route('ventas.create') }}" type="button" class="btn-sm btn btn-success"><i
                        class="fa fa-plus-circle"></i> Crear nueva venta</a>
            </div>
        </div>
    </div>


    @if (count($ventas) > 0)
        <table class="table text-center table-striped">
            <thead>
                <tr>
                    <th scope="col">ID</th>

                    <th>Nombre del Uuario</th>
                    <th scope="col">Curso adquirido</th>
                    <th scope="col">Fecha de la compra</th>
                    <th>Opciones</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($ventas as $venta)
                    <tr>
                        <th scope="row">{{ $venta->id }}</th>
                        <td>{{ $venta->nombre_usuario }}</td>
                        <td>{{ $venta->curso }}</td>
                        <td>{{ $venta->created_at }}</td>
                        <td>
                            <a href="" title="Mostrar más"
                                class="btn-sm btn btn-info"><i class="fa fa-eye"></i></a>
                            <a href="" title="Editar curso"
                                class="btn-sm btn btn-primary"><i class="fa fa-edit"></i></a>
                            <a href="" title="Eliminar curso seleccionado más"
                                class="btn-sm btn btn-danger"><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                @endforeach


            </tbody>
        </table>
    @else
        <img class="mx-auto d-block" style="width: 300px;height:300px;"
            src="{{ Storage::disk('public')->url('images/otros/loading.gif') }}" alt="">
    @endif

    {{ $cargado == true ? $ventas->links() : null }}
</div>
