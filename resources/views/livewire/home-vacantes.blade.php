<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto">
            <h3 class="font-extrabold text-4xl text-gray-700 mb-12">
                Nustras vacantes disponibles
            </h3>
                <div class="bg-white shadow-sm rounded-lg p-6 divide-y divide-gray-200">
                    @forelse ($vacantes as $vacante)
                    <div class="md:flex md:justify-between md:items-center py-5">
                        <div class="md:flex-1">
                                <a class="text-3xl font-extrabold text-gray-600" href="{{ route('vacantes.show', $vacante->id) }}">
                                    {{ $vacante->titulo }}
                                </a>
                                <p class="text-base text-gray-600 mb-3">{{ $vacante->empresa}}</p>
                                <p class="text-base text-gray-600 mb-3 font-bold">Para:
                                    <span class="font-normal">{{ $vacante->carrera->carrera}}</span>
                                </p>

                        </div>
                        <div class="mt-5 md:mt-0">
                            <a class="bg-blue-400 p-3 text-sm uppercase font-bold text-cyan-50 rounded-lg block text-center"
                            href="{{ route('vacantes.show', $vacante->id) }}">
                                Ver está vacante
                            </a>
                        </div>
                    </div>
                    @empty
                        <p>¡Ups! Aun no hay vacantes disponibles </p>
                    @endforelse
                </div>
        </div>

    </div>
</div>
