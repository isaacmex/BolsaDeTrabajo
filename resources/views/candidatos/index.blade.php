<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Candidatos De Vacantes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <img class="w-50 h-20 rounded" src="https://edu.ieee.org/mx-ittg/wp-content/uploads/sites/536/image-1.png" alt="Large avatar">

                    <h1 class="text-8x1 font-bold text-center mb-10">
                        Candidatos de la vacante: {{$vacante->titulo  }}
                    </h1>
                    <div class="md:flex md:justify-center p-5">
                        <ul class="divide-y divide-gray-200 w-full ">
                            @forelse ($vacante->candidatos as $candidato)
                                <li class="p-3 flex items-center">
                                    <div class="flex-1">
                                        <p class="text-xl font-medium text-gray-800"> {{ $candidato->user->name }}</p>
                                        <p class="text-sm  text-gray-600"> {{ $candidato->user->email }}</p>
                                        <p class="text-sm font-medium  text-gray-600"> Dia que se postuló:
                                            <span> {{ $candidato->created_at->diffForHumans()}} <span>

                                        </p>
                                    </div>
                                        <div>
                                        <a  class="
                                        bg-blue-400 p-3 text-sm uppercase font-bold text-cyan-50 rounded-lg"
                                          href="{{ asset('storage/cv/'. $candidato->cv) }}"
                                        target="_blank"
                                        rel="noreferrer noopener"
                                          > Ver CV</a>


                                    </div>
                                </li>
                            @empty
                                <p>¡No hay candidatos aún!</p>
                            @endforelse

                        </ul>
                    </div>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
