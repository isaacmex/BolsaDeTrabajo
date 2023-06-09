<x-app-layout>
    <x-slot name="header">

        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Crear vacante') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <img class="w-50 h-20 rounded" src="https://edu.ieee.org/mx-ittg/wp-content/uploads/sites/536/image-1.png" alt="Large avatar">

                    <h1 class="text-8x1 font-bold text-center mb-10">Publicar Vacante</h1>
                    <h1 class="md:flex md:justify-center p-5">
                        <livewire:crear-vacante/>
                    </h1>



                </div>
            </div>
        </div>
    </div>
</x-app-layout>
        