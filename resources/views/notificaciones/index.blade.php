<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Notifiaciones') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <img class="w-50 h-20 rounded" src="https://edu.ieee.org/mx-ittg/wp-content/uploads/sites/536/image-1.png" alt="Large avatar">

                    <h1 class="text-8x1 font-bold text-center mb-10">->Mis notificaciones<-</h1>

                        @forelse ($notificaciones as $notificacion)
                        <div class=" p-5 borde border-gray-200 lg:flex lg:justify-between lg:items-center">
                            <div>
                                <p>Tienes una nueva notifiacion en :
                                <span class="font-bold">{{ $notificacion->data ['nombre_vacante']}}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans()}}</span>
                                </p>
                        </div>
                            <div class="mt-5 lg:mt-0">
                                <a href="{{ route('candidatos.index', $notificacion->data ['id_vacante' ]) }}" class="bg-blue-400 p-3 text-sm uppercase font-bold text-cyan-50 rounded-lg">
                                    Ver candidatos
                                </a>
                            </div>
                         </div>
                        @empty
                            <p class="text-center text-gray-600"> No hay notifiaciones que mostrar</p>

                        @endforelse


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
