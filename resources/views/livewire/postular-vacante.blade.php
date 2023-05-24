<div class="bg-gray-100 p-5 mt-10 flex flex-col justify-center items-center ">
        <h3 class="text-center text-2xl font-bold my-4">Postularme a esta vacante</h3>
        <form wire:submit.prevent='postularme' action="" class="w-96 mt-5">
                    <div class="mb-4">
                        <label for="cv" class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"> Curriculon o Hoja de vida (PDF) </label>
                        <input id="cv" type="file" wire:model="cv" accept=".pdf" class="block mt-1 2-full"/>
                    </div>
                    @error('cv')
                        <livewire:mostrar-alerta :message="$message">
                    @enderror
                    <button type="submit"
                    class="text-white bg-gradient-to-br from-purple-600 to-blue-500 hover:bg-gradient-to-bl focus:ring-4 focus:outline-none focus:ring-blue-300 dark:focus:ring-blue-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2">
                  ¡Postularme ahora!
                   </button>
        </form>
</div>
