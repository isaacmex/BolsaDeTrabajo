<form class="md:w-1/2 space-y-5" wire:submit.prevent='crearVacante' >

     <div>
        <x-input-label for="titulo" :value="__('Titulo de la Vacante')" />
        <x-text-input
            id="titulo"
            class="block mt-1 w-full"
            type="text"
            wire:model="titulo"
            :value="old('titulo')"
            placeholder="Titulo de la vacante"
           />

           @error('titulo')
                    <livewire:mostrar-alerta :message="$message"/>

           @enderror
    </div>
    <div>

        <x-input-label for="salario" :value="__('Salario Mensual')" />
        <x-text-input
            id="salario"
            class="block mt-1 w-full"
            type="text"
            wire:model="Salario"
            :value="old('salario')"
            placeholder="Salario"
           />
           @error('Salario')
           <livewire:mostrar-alerta :message="$message"/>
            @enderror
    </div>

    <div>
        <x-input-label for="carrera" :value="__('Carrera o Area')" />
        <select
        wire:model="carrera"
        id="carrera"
        class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full">

        <option >--Seleccione--</option>
        @foreach ($carreras as $carrera )
        <option value="{{$carrera->id}}">{{$carrera->carrera}}</option>
        @endforeach
        </select>
        @error('carrera')
                    <livewire:mostrar-alerta :message="$message"/>
        @enderror
    </div>

    <div>
        <x-input-label for="empresa" :value="__('Empresa')" />
        <x-text-input
            id="empresa"
            class="block mt-1 w-full"
            type="text"
            wire:model="empresa"
            :value="old('empresa')"
            placeholder="Empresa ej. Nestle, Uber , Netflix"
           />
           @error('empresa')
                    <livewire:mostrar-alerta :message="$message"/>

           @enderror
    </div>

    <div>
        <x-input-label for="descripcion" :value="__('Descripcion')" />
            <textarea
            wire:model="descripcion"
            placeholder="Descripcion" class="block text-sm text-gray-500 font-bold uppercase mb-2 w-full h-72">
        </textarea>
        @error('descripcion')
                    <livewire:mostrar-alerta :message="$message"/>

           @enderror
    </div>


    <div>
        <x-input-label for="imagen" :value="__('Imagen')" />
        <x-text-input
            id="imagen"
            class="block mt-1 w-full"
            type="file"
            wire:model="imagen"
           />
           <div class="my">
            @if ($imagen)
                Imagen:
                <img src="{{ $imagen->temporaryUrl() }}">
            @endif
           </div>

           @error('imagen')
                    <livewire:mostrar-alerta :message="$message"/>

           @enderror
    </div>
    <div>

        <button type="submit"
         class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
         Crear Vacante
        </button>

    </div>
</form>
