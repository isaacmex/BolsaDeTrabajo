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
                            <div class=" mb-4 rounded-lg bg-success-100 px-6 py-5 text-base text-success-700">
                                <h3 >¡Tienes una nueva notificacion!</h3>
                                <p>En:
                                        <span class="font-bold">{{ $notificacion->data ['nombre_vacante']}}</span>
                                </p>
                                <p>
                                    <span class="font-bold">{{ $notificacion->created_at->diffForHumans()}}</span>
                                </p>

                            </div>
                        @empty
                            <p class="text-center text-gray-600"> No hay notifiaciones que mostrar</p>

                        @endforelse


                </div>
            </div>
        </div>
    </div>
</x-app-layout>
