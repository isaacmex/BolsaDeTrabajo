
<div>
    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


        @forelse ($vacantes as $vacante )

        <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

            <div class="leading-10">
                <a href="{{ route('vacantes.show', $vacante->id) }}"
                 class="text-xl font-bold">
                    {{ $vacante->titulo }}
                </a>
                <p class="text-sm text-gray-600 font-thin">{{ $vacante->empresa }}</p>
                <p class="text-sm text-red-600 font-blod">Salario: {{ $vacante->salario }}</p>

            </div>
            <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
                <a href="{{ route('candidatos.index', $vacante) }}"
                class="bg-slate-800 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">

                {{ $vacante->candidatos->count() }}
                candidatos
                </a>

                <a href="{{ route('vacantes.edit', $vacante->id) }}"
                class="bg-blue-800 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">
                Editar
                </a>

                <button
                 wire:click="$emit('MostrarAlerta', {{ $vacante-> id }})"
                class="bg-red-600 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">
                Eliminar
                <button>
            </div>
        </div>
        @empty
        <p class="p-3 text-center text-sm text-gray-600">No hay vacantes para mostrar</p>

        @endforelse
        </div>
        <div class="flex justify-center mt-10">
            {{ $vacantes->links() }}
        </div>
</div>

@push('scripts')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"> </script>
    <script>
        Livewire.on('MostrarAlerta', VacanteId =>{
            Swal.fire({
                title: '¿Deseas eliminar esto?',
                text: "Una vez eliminado, no se puede recuperar",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Si, ¡Deseo eliminarlo!',
                cancelButtonText: 'Cancelar'
                }).then((result) => {
                if (result.isConfirmed) {

                    Livewire.emit('eliminarVacante', VacanteId)
                    Swal.fire(
                    'Eliminado',
                    'La vacante se elimino correctamente',
                    'success'
                    )
                }
                })

        } )

    </script>
@endpush

