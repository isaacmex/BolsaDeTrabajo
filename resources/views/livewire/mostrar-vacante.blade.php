<div class="p-10 bg-slate-200">
    <div class="mb-5">
        <h3 class="font-bold text-xl text-gray-800 my-3">
            {{ $vacante->titulo }}
        </h3>
        <div class="md:grid md:grid-cols-3 bg-white">
            <p class="font-bold text-sm text-gray-800 my-3">Empresa:
                <span class="normal-case font-normal">{{ $vacante->empresa }}</span>
            </p>
            <p class="font-bold text-sm text-gray-800 my-3">Salario:
                <span class="normal-case font-normal">{{ $vacante->salario }}</span>
            </p>
            <p class="font-bold text-sm text-gray-800 my-3">Carrera:
                <span class="normal-case font-normal">{{ $vacante->carrera->carrera}}</span>
            </p>
        </div>
    </div>

    <div class="md:grid md:grid-cols-6 gap-4">
       <div class="md:col-span-2">
            <img src="{{ asset('storage/vacantes/' . $vacante->imagen) }}" alt="{{ 'Imagen vacante' . $vacante->titulo}}">
       </div>
       <div class="md:col-span-4">
        <h2 class="text-2xl font-bold mb-5">Descripcion del puesto: </h2>
        <p class=" bg-white">{{ $vacante->descripcion }}</p>
       </div>
    </div>
    @guest
        <div class="mt-5 bg-gray-50 border border-dashed p-5 text-center">
            <p>¿Deseas aplicar a esta vacante?</p> <a class="font-bold text-indigo-600" href="{{ route('register') }}">¡Obten tu cuenta y aplica a esta y otras vacantes!</a>

        </div>
    @endguest

    @cannot('create', App\Models\Vacante::class)

    <livewire:postular-vacante :vacante="$vacante"/>

    @endcannot


</div>
