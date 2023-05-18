<div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">


    @forelse ($vacantes as $vacante )

    <div class="p-6 bg-white border-b border-gray-200 md:flex md:justify-between md:items-center">

        <div class="leading-10">
            <a href="#" class="text-xl font-bold">
                {{ $vacante->titulo }}
            </a>
            <p class="text-sm text-gray-600 font-thin">{{ $vacante->empresa }}</p>
            <p class="text-sm text-red-600 font-blod">Salario: {{ $vacante->salario }}</p>

        </div>
        <div class="flex flex-col md:flex-row items-stretch gap-3 mt-5 md:mt-0">
            <a href="#"
            class="bg-slate-800 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">
            candidatos
            </a>

            <a href="{{ route('vacantes.edit', $vacante->id) }}"
            class="bg-blue-800 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">
            Editar
            </a>

            <a href="#"
            class="bg-red-600 py-2 px-4 rounded-lg text-white font-bold uppercase text-center">
            Eliminar
            </a>
        </div>
    </div>
    @empty
    <p class="p-3 text-center text-sm text-gray-600">No hay vacantes para mostrar</p>

    @endforelse
    </div>
    <div class="flex justify-center mt-10">
        {{ $vacantes->links() }}
    </div>
