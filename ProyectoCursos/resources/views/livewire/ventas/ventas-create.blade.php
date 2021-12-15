<div>
    <form wire:submit.prevent="crear">
        <div class="card">
            <div class="card-header">
                Crear nueva venta
            </div>
            <div class="card-body">
                @include('livewire.ventas.formulario')
            </div>
            <div class="card-footer text-muted">
                <button class="btn btn-success btn-sm" href="{{ route('ventas.index') }}"><i class="fa fa-save"></i> Guardar</button>
                <a href="{{ route('ventas.index') }}" class="btn btn-secondary btn-sm">Regresar</a>
            </div>
        </div>
    </form>
</div>
